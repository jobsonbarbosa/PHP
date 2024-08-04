<?php

function incluirClasses( $classes ) {
    
    if(file_exists($classes . ".php") === true){
        require_once($classes . ".php");
    }

}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($classes){
    if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $classes . ".php") === true){
        require_once("Abstratas" . DIRECTORY_SEPARATOR . $classes . ".php");
    }
});

$carro = new DelRey();
$carro->acelerar(80);