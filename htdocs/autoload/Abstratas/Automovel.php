<?php

interface veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

 abstract class Automovel implements veiculo {
    public function acelerar($velocidade){
        echo "O veiculo acelerou ate " . $velocidade . "km/h";
    }
    public function frenar($velocidade){
        echo "frenou até " . $velocidade . "km/h";
    }
    public function trocarMarcha($marcha){
        echo "o Veiculo engatou a marcha ". $marcha;
    }



}


?>