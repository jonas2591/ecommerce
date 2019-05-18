<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Djalma Sindeuax");
$cad->setEmail("jon2591233@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();


?>