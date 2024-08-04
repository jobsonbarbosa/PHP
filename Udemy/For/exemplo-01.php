<?php

//O for é usado como um contator, tem inicio, fim e taxa incremental ou decremental
$numero = 100;
/* podemos alterar o incrementador para pular a sua sequencia "$i+=5"*/
for ($i=0; $i < $numero; $i+=5) { 

    if($i > 20 && $i < 80) continue;

    if ($i === 90) break;
        
    echo $i . "\n";
}