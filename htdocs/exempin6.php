<?php

$carro1 = "Honda civic";

function carro(){
global $carro1;
echo $carro1;

};

function carro2(){
    global $carro1;
    echo $carro1;
    
    };

carro2()

?>