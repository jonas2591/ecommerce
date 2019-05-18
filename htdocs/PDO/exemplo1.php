<?php
$conn = new PDO("mysql:dbname=db_revolt;host=localhost", "root", "");
//$nome = $_POST['nome'];
//$tabelacc = $_POST['cc'];
//$stmt = $conn->prepare("INSERT INTO tb_ccs (nome, tabelacc) VALUES (?,?)");
//$stmt->execute([$nome, $tabelacc]);
$stmt = $conn->prepare("SELECT * FROM tb_ccs ORDER BY idccs");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results)

?>