<?php
function gerarcvv(){
$cvvrand = mt_rand(0, 999);
while($cvvrand){
    if ($cvvrand >= 100){
        echo $cvvrand . "<br>";
        break;
    }elseif($cvvrand === 0){
        echo "000" . "<br>";
        break;
    }elseif($cvvrand === 1){
        echo "000" . "<br>";
        break;
    }elseif($cvvrand === 2){
        echo "002" . "<br>";
        break;
    }elseif($cvvrand === 3){
        echo "003" . "<br>";
        break;
    }elseif($cvvrand === 4){
        echo "004" . "<br>";
        break;
    }elseif($cvvrand === 5){
        echo "005" . "<br>";
        break;
    }elseif($cvvrand === 6){
        echo "006" . "<br>";
        break;
    }elseif($cvvrand === 7){
        echo "007" . "<br>";
        break;
    }elseif($cvvrand === 8){
        echo "008" . "<br>";
        break;
    }elseif($cvvrand === 9){
        echo "009" . "<br>";
        break;
    }elseif($cvvrand <= 99){
        echo "0" . $cvvrand . "<br>";
        break;
    }}}

$gerarcvv = gerarcvv();


echo $gerarcvv;

?>