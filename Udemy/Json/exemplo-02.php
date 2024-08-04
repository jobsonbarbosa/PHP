<?php

$json = '[{"nome":"Jobson","idade":38},{"nome":"Joelma","idade":37}]';

//transforma o Json em array, se nao houve o true o retorno é um objeto
$data = json_decode($json, true);

print_r($data);