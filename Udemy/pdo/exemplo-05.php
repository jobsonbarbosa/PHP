<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$idusuario = 4;

$stmt->bindParam(":ID", $idusuario);

$stmt->execute();

echo "Dados DELETADOS DE ID: {$idusuario}!";