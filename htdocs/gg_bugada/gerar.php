<?php
error_reporting(0);
$lista = $_POST['lista'].";07;2022;";


foreach (range(999, 1) as $cvv) {
	if (strlen($cvv) == 1) {
		$cvv = "00" . $cvv;
	}elseif (strlen($cvv) == 2) {
		
		$cvv = "0" . $cvv;
	}
	echo $lista;
	echo $cvv."\n";

}	
?>