<?php

/*
$ts = strtotime("2001-09-11");
echo date("l, d/m/Y", $ts);
*/
/*
$ts = strtotime("+24 hours");
echo date("l, d/m/Y", $ts);
*/

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo "Ola usuario, uma otima " . strftime("%A") . " para você"; 
echo "<BR>";
echo "iai, esse mes de " . strftime("%B") . " é o mes de ganhar muito dinheiro certo?";

//echo strftime("%A %B");


/*
$DiaFinalDoUsuario = strtotime("2019/02/30");

$dataAtual = time(); //Data atual



echo "<br>";

echo "Dia Final do usuario: " . $DiaFinalDoUsuario;
echo "<br>";
echo "Data atual: ". $dataAtual;
if ($dataAtual == $DiaFinalDoUsuario){
    echo "<br>";
    echo "Desculpe, mas o seus dias acabaram";
}else{
    echo "<br>";
    echo "Você ainda tem alguns dias restantes !";
}
*/


?>