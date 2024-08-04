<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo {

    public function acelerar($velocidade) {
        echo "O veiculo acelerou até " . $velocidade . "KM/h.";
    }
    public function frenar($velocidade) {
        echo "O veiculo frenou " . $velocidade . "Km/h";
    }
    public function trocarMarcha($marcha) {
        echo "O veiculo engaou a marchar " . $marcha;
    }
}

$carro = new Civic();

$carro->trocarMarcha("1");