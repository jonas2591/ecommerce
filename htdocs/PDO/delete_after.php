<?php

require_once("exemplo1.php");
for ($i=0;$i<=5;$i++){
$tempodalista = $results[$i]['datadalista'];
$tempodalista2 = $results[$i]['idccs'];
$tempodacc = substr($tempodalista,0,10);
echo $tempodalista;
$dt_atual = date("Y-m-d"); // data atual
$timestamp_dt_atual = strtotime($dt_atual); // converte para timestamp 

$timestamp_dt_expira = strtotime($tempodacc); // converte para timestamp 
$iddacc = $tempodalista2;

if ($timestamp_dt_atual > $timestamp_dt_expira){
 
    $stmt2 = $conn->prepare("SELECT * FROM tb_ccs ORDER BY idccs");
    $stmt2->execute();
    $results2 = $stmt2->fetchAll(PDO::FETCH_COLUMN);
  
    $stmt = $conn->prepare("DELETE FROM tb_ccs WHERE idccs = $iddacc");
    $stmt->execute(); 
    
}

}



?>