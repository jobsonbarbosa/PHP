<?php

$cond = true;

while($cond){
    
    $numero = rand(1, 10);

    if($numero === 3){

        echo "TRÊS!!!";

        $cond = false;
    } else
        echo $numero . "\n";
}