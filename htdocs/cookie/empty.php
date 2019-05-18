<?php

$variavel = $_POST['nome'];
//!empty: se a variavel NÃO estiver VAZIA 
//empty: se a variavel estiver VAZIA
if (!empty($variavel)){

	echo "Certo meu caro amigo!";

}else{
	echo "Coloca algum dado ai amigo";
}


?>