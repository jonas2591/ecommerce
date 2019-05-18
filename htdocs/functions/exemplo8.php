<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'Subordinados'=>array(
            //inicio: Diretor comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'Subordinados'=>array(
                    //inicio gerente de vendas
                    array(
                        'nome_cargo'=>'Gerente de vendas'
                    )
                    //termino gerente de vendas
                )//termino diretor comercial
            ),
//inicio Diretor financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'Subordinados'=>array(
                    //Inicio gerente financeiro
                    array(
                        'nome_cargo'=>'Gerente financeiro',
                        'Subordinados'=>array(
                            //inicio supervisor
                            array(
                                'nome_cargo'=>'Supervisor de pagamentos',
                                )
                            )
                            //termino supervisor
                        )
                            ),
                    //Fim genrente financeiro
                    //inicio gerente de compras
                    array(
                        'nome_cargo'=>'Gerente de compras',
                        'Subordinados'=>array(
                            //inicio supervisor de compras
                            array(
                                'nome_cargo'=>'Supervisor de compras'
                            )
                            //termino supervisor de compras
                        )
                    )
                    //fim gerente de compras
                )
            )
            //termino diretor financeiro
        )
    );


    function exibe($cargos){

        $html = "<ul>";

        foreach ($cargos as $cargo){
            $html .= "<li>";
            $html .= $cargo['nome_cargo'];
        if (isset($cargo['Subordinados']) && count($cargo['Subordinados']) >0) {
        $html .= exibe($cargo['Subordinados']);
}
            $html .= "</li>";
        }

        $html .= "</ul>";

        return $html;

    }
    echo exibe($hierarquia);

?>