<?php
 //primeiro paramento é o Servidor
$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){
    echo "Erro: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($row = $result->fetch_assoc()) {

    array_push($data, $row);
    
}

echo json_encode($data);