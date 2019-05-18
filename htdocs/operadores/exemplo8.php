<?php

$resultado = 10 + 3 / 2 > 5 && 10 + 5 < 20;
// && compara se é true ou false, se os 2 forem true, sempre vai dar true
//se 1 dos 2 forem false, vai dar false

$resultado = 10 + 3 / 2 > 5 || 10 + 5 < 20;
// || se uma das confições forem verdadeiras, ele da true

var_dump($resultado);

?>