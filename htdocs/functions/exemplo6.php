<?php

$pessoa = array(
    'nome'=>'jonas',
    'idade'=>20,
    'nulo'=>NULL
);

$pessoa2 = "Rodrigo";

foreach ($pessoa as &$value){ ////esse & comercial busca o valor da variavel que foi criada, e altera o valor da variavel 
    if (gettype($value) == 'integer') $value = "Vanessa";
    if (gettype($value) == 'float') $value = "Joninhas";
    if (gettype($value) == 'NULL') $value = "Joninhas";
    echo $value . "<br>";


}

print_r($pessoa);

?>