<?php

//declaração de tipos escalares, recebendo todos os paramentos e transformando para int
function soma(int ...$valores): string {
    return array_sum($valores);
}

echo var_dump(soma(1,2,3,4,5,)) ."\n";
echo soma(2,3,4,5,6,7,8,9,) ."\n";
echo soma(3,4,5,6);