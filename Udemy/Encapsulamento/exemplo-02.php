<?php

class Pessoa {

/*
    ACESSO AOS ATRIBUTOS E METODOS: 
    public -> todos tem acesso;
    protected -> metodos da mesma class e class extendidas
    private -> apenas mesma classe;
*/

    public $nome = "Jobs Solutions IT";

    protected $idade = 38;
    private $senha = "123456";

    public function verDados() {
        echo $this->nome . "\n";
        echo $this->idade . "\n";
        echo $this->senha . "\n";
    }

}

class Programador extends Pessoa {

    //get_class mostra de onde esta sendo recebido o dados do metodo.
    public function verDados() {

        echo get_class($this) ."\n";

        echo $this->nome . "\n";
        echo $this->idade . "\n";
 //      echo $this->senha . "\n";
    }

}

$objeto = new Programador();


$objeto->verDados();