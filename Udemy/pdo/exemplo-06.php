<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$idusuario = 6;

$stmt->execute(array($idusuario));

//$conn->rollBack();
$conn->commit();

echo "Dados DELETADOS DE ID: {$idusuario}";