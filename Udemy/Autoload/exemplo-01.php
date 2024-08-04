<?php
spl_autoload_register(function($nomeClasse) {
    var_dump($nomeClasse);
    require_once("Abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php");
});


$carro = new DelRey();
$carro->acelerar(80);