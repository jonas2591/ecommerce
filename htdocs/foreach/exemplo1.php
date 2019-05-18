<?php

$conn = new PDO("mysql:dbname=db_revolt;host=localhost", "root", "");

$meses = array(
    "Janeiro", "Fevereiro", "Março", 
    "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"
    );

foreach ($meses as $key => $mes){
$stmt = $conn->prepare("INSERT INTO tb_ccs (nome, tabelacc) VALUES(:MESES, :CCS)");
$ccs = "498401xxxxxxxxxx;05;2020;588";
$stmt->bindParam(":MESES", $mes);
$stmt->bindParam(":CCS", $ccs);
$stmt->execute();

}



?>