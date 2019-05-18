<?php

$a = NULL;

$b = NULL;

$c = 10;

echo $a ?? $b ?? $c;


//?? significa mostrar o $a, mas se ele for nulo, mostra o $b
//mas se tb for nulo mostra o c, ate tiver um que não é nulo

//Se ele parasse no $b, e nao fosse nulo, ele ignoraria o $c

?>