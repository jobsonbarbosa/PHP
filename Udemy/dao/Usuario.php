<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    //id usuário
    public function getIdusuario() {
        return $this->idusuario;
    }
    public function setIdusuario($value) {
        $this->idusuario = $value;
    }

        //deslogin
    public function getDeslogin() {
        return $this->deslogin;
    } 
    public function setDeslogin($value) {
        $this->deslogin = $value;
    }

    //dessenha
    public function getDessenha() {
        return $this->dessenha;
    }
    public function setDessenha($value) {
        $this->dessenha = $value;
    }

    //dessenha
    public function getDtcadastro() {
        return $this->dtcadastro;
    }
    public function setDtcadastro($value) {
        $this->dtcadastro = $value;
    }

    public function loadByID($id) {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if(count($results) > 0 ) {

            $this->setData($results[0]);
        }
    }

    public static function getList(){
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }
    public static function search($login) {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ':SEARCH' => "%" . $login . "%"
        ));
    }

    public function login($login, $password) {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array( 
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));
        
        if(count($results) > 0){

            $row = $results[0];

            $this->setData($results[0]); 

        } else {

            throw new Exception("Login ou senha invalidos");
        }
    }

    public function setData($data) {

        $this->setIdusuario($data["idusuario"]);
        $this->setDeslogin($$data["deslogin"]);
        $this->setDessenha($data["dessenha"]);
        $this->setDtcadastro(new DateTime($data["dtcadastro"])); 
    }
    public function insert() {



        $sql = new Sql();

        $sql->select("");

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ":LOGIN" =>$this->getDeslogin(),
            ":PASSWORD"=> $this->getDessenha()
        ));

        if(count($results) > 0){
            $this->setData($results[0]);
        }
    }

    public function __construct($login = "", $password = "") {
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }

    public function __tostring() {

        return json_encode(array(
            "idusuario"=> $this->getIdusuario(),
            "deslogin"=> $this->getDeslogin(),
            "dessenha"=> $this->getDessenha(),
            "dtcadastro"=> $this->getDtcadastro()->format("d/m/Y H:i:s")

        ));
    }

}