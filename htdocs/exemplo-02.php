<?php
$nome1 = "Joao";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

echo "<br>";

unset($nome1, $sobrenome);

if (isset($nome1)) {

    echo $nome1 . " " . $sobrenome;
};



?>