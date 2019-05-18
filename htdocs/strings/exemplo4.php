<?php

$frase = "A repetição é mãe da retenção.";

$q = strpos($frase, "mãe"); //Posição 17

$texto = substr($frase, 17, 4); //o 17 é onde a frase mãe fica, e o 4 é ate onde eu quero q ele pegue depois do mãe
$texto2 = substr($frase, 24, 11); //retenção
var_dump($texto . " " . $texto2);


?>