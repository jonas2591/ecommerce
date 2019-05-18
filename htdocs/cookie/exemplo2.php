<?php

if (isset($_COOKIE["SESSAO_LOGIN"])){


$obj = json_decode($_COOKIE["SESSAO_LOGIN"]);

echo $obj->empresa;


}



?>