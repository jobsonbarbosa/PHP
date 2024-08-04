<?php

$pessoas = array();


//array_push inclui um elemento dentro do array

array_push($pessoas, array(
    'nome'=> 'Jobson',
    'idade'=> 38
));

array_push($pessoas, array(
    'nome'=> 'Joelma',
    'idade'=> 37
));

// transforma o array em Json para ser consumido
echo json_encode($pessoas);