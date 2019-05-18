<?php
//variavel é uma coisa, parametro de função é outra
$a = 10; //esse $a é uma variavel

//os 2 são coisas diferentes
function trocavalor(&$a){ //esse $a que ta dentro da função é um parametro

    $a += 50;
    
    return $a;

}

echo trocavalor($a);
echo "<br>";
echo $a;


//variavel é uma coisa, parametro de função é outra
$a = 10; //esse $a é uma variavel

//os 2 são coisas diferentes
function trocavalor2(&$a){ //esse & comercial busca o valor da variavel que foi criada, e altera o valor da variavel 

    $a = 50;

}

?>