<?php

require_once("config.php");
require_once("/xampp/htdocs/Udemy/dao/Usuario.php");

$usuario = new Usuario();

$usuario->loadByID(2);

echo($usuario);


/*
//consulta de todos os usuário
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/