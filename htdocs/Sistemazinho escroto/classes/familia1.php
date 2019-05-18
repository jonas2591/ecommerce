<?php


interface familia {
    public function setfamilia($irmao, $irman, $mae, $pai, $avo, $tiu);
    public function getfamilia();
}


class familia1 implements familia{
    private $irmao;
    private $irman;
    private $mae;
    private $pai;
    private $avo;
    private $tiu;

    public function setfamilia($irmao, $irman, $mae, $pai, $avo, $tiu){
        $this->irmao = $irmao;
        $this->irman = $irman;
        $this->mae = $mae;
        $this->pai = $pai;
        $this->avo = $avo;
        $this->tiu = $tiu;
    }
    public function getfamilia(){
        return $this->irmao . "<br>" . $this->irman . "<br>" . $this->mae . "<br>" . $this->pai . "<br>" . $this->avo  . "<br>" . $this->tiu;
    }
}



?>