<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Jobs Solutions IT");
$cad->setEmail("jobssolutionsit@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();
