<?php

abstract class Animal {
    public function falar() {
        return "Som";
    }
    public function mover() {
        return "Anda";
    }
}

class Cachorro extends Animal {
    public function falar() {
        return "Late";
    }

}

class Gato extends Animal {
    public function falar() {
        return "Mia";
    }
}

class Passaro extends Animal{
    public function falar() {
        return "Canta";
    }
    
    //o parent permite usar o metodo da class Pai.
    public function mover(){
        return "Voa e " . parent::mover();
    }
}


$pluto = new Cachorro();
echo $pluto->falar();
echo "\n";
echo $pluto->mover();
echo "\n";

echo "---------------------------- \n";

$gato = new Gato();
echo $gato->falar();
echo "\n";
echo $gato->mover();
echo "\n";

echo "---------------------------- \n";

$passaro = new Passaro();
echo $passaro->falar();
echo "\n";
echo $passaro->mover();
echo "\n";