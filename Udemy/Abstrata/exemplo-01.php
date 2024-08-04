<?php

/* O objeto não pode instanciar a class abstrata.
Para ser usado os medotos criados na class abstradas
é necessario extender um class a partir da abstrata
*/
interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {

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

class DelRey extends Automovel {
    public function empurrar(){

    }
}

$carro = new DelRey();
$carro->acelerar(200);