<?php

$qualAsuaIdade = 125;
$crianca = 12;
$IdadeMaior = 18;
$idademelhor = 65;

if ($qualAsuaIdade < $crianca){
    echo "Criança";
} 
else if ($qualAsuaIdade < $IdadeMaior){
    echo "Adolescente";
}
else if($qualAsuaIdade < $idademelhor){
  echo "Adulto";
}
else if ($qualAsuaIdade > $idademelhor){
echo "Idoso";

}

echo "<br>";

echo ($qualAsuaIdade < $idadeMaior)?"Menor de idade":"Maior de Idade";


?>