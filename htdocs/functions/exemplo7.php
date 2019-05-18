<?php



function soma(float ...$valores){

    return array_sum($valores);

}


echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.9, 1.1);
echo "<br>";



?>