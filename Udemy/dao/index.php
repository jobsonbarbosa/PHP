<?php

require_once("config.php");
require_once("/xampp/htdocs/Udemy/dao/Usuario.php");

// retorna apenas um usuario
//$usuario = new Usuario();
//$usuario->loadByID(2);

//retorna uma lista
//$lista = Usuario::getList();
//echo json_encode($lista);


//busca login
//$search = Usuario::search("Ma");
//echo json_encode($search);

//carrega um usuário com login e senha
//$usuario =new Usuario();
//$usuario->login("Maura Silva", "123456");
//echo $usuario;


//insert de um usuario novo
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;

/*
//consulta de todos os usuário
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/