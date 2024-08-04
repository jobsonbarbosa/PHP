<?php

class Endereco {

    private $logradouro;

    private $numero;

    private $cidade;

    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct() {
        echo "Desctuin";
    }
}

$endereco = new Endereco("Rua Artemino Castro Valente", 99998, "Salvador - BA");

print_r($endereco);

unset($endereco);