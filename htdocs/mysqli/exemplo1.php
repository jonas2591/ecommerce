<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error){
    echo "Erro: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

$stmt->bind_param("ss", $login, $pass);

$login = "User6";
$pass = "1234567";

$stmt->execute();


?>