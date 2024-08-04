<?php

class Pessoa {
    public $nome = "Jobs Solutions IT";

    protected $idade = 38;
    private $senha = "123456";

    public function verDados() {
        echo $this->nome . "\n";
        echo $this->idade . "\n";
        echo $this->senha . "\n";
    }

}

$objeto = new Pessoa();

//echo $objeto->nome . "\n";

/* quem pode acessar os metodos dentro do protected são o metodos
de dentro da propria classe, ou quem herda da classe filha.
*/

//echo $objeto->idade . "\n";

//echo $objeto->senha . "\n";

$objeto->verDados();