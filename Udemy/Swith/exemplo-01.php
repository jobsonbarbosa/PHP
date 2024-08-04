<?php
//Mostrar os dias da semana
// o date("w"), pega o numero do dia da semana
$diaDaSemana = date("w");

switch ($diaDaSemana + 1) {
    case 0 :
        echo "Domingo";
        break;
    case 1 :
        echo "Segunda";
        break;
    case 2:
        echo "Terça";
        break;
    case 3:
        echo "Quarta";
        break;
    case 4:
        echo "Quinta";
        break;
    case 5:
        echo "Sexta";
        break;
    case 6:
        echo "Sabado";
        break; 
    
    
    default:
        echo "Opção invalida";
        break;
}
