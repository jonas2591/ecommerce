<?php
class MaeDoSalinn {
Public $centimetrosDaXereka;

Public Function maesalinn(){
    return "A xereka da mãe do Salinn tem ".$this->centimetrosDaXereka;
}
}


function randommamae(){

    $XerekaRandom = rand(0,999);

    return $XerekaRandom;

}



$randomxerekaVariavel = randommamae();

$mamae = new MaeDoSalinn();
$mamae->centimetrosDaXereka = $randomxerekaVariavel . " metros de profundidade";
echo $mamae->maesalinn();
?>