<?php

class informcaoes{
    private $senha;
    public function setSenha($valor){
        if ($valor === "Senha123"){  
            $this->senha = "[CERTO] A senha: " . $valor . " está correta";
        }else{
            $this->senha = "[ERRO] A senha " . $valor . " está errada";
        }
    }
    public function getSenha(){
        return $this->senha;
    }
}

$instancia = new informcaoes();
$valor = $instancia->setSenha("Senha123");
$valor = $instancia->getSenha();

print_r($valor);

?>