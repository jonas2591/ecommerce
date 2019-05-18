<?php
function calculaDobro($numero){
	return $numero+=2;
}
$meuArray = array(2,3,4);
$novoArray = array_map("calculaDobro", $meuArray);
print_r($novoArray);

?>