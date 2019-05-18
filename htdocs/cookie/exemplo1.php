<?php

$data = array(
	"empresa"=>"RevoltChecker"
);

//Primeiro parametro: Nome do cookie
//Segundo parametro: Dados que serão armazenados no cookie
//Terceiro parametro: tempo que o cookie vai existir na maquina do usuario
setcookie("SESSAO_LOGIN", json_encode($data), time() + 3600);
echo "OK";

?>