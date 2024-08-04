<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    //GETS E SETS Modelo
    public function getModelo(): string {
        return $this->modelo;
    }
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    //GETS E SETS Motor
    public function getMotor(): float {
        return $this->motor;
    }
    public function setMotor($motor) {
        $this->motor = $motor;
    }

    //GET E SETS Ano
    public function getAno(): int {
        return $this->ano;
    }
    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function exibir() {
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }

}

$carro = new Carro();
$carro->setModelo("Gol GT");
$carro->setMotor("1.6");
$carro->setAno(2022);

var_dump($carro->exibir());