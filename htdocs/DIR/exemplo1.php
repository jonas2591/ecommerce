<?php

$name = "images";
if (is_dir($name) === false){
    echo "Diretorio Criado";
    mkdir($name);
    //echo "Diretorio $name criado com sucesso!";

} else{
    
    echo "Ja existe um diretorio chamado $name";
}


?>