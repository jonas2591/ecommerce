<?php


$conn = new PDO("mysql:dbname=db_revolt;host=localhost", "root", "");
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$log = "- Usuario: " . $results[0]["nome"] . " Ultimo dia logado: " . date("Y-m-d H:i") . "\r";
$file = fopen("logs_acess.txt", "a+");
//Funções de html tipo "<br>" nao funcionam na função fopen
fwrite($file, $log);
fclose($file);
var_dump($results[0]["nome"]);
//echo "Arquivo criado";

?>