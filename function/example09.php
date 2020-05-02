<?php

$hierarquia = array (
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=> array(
            // Início: Diretor comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    // Início: Gerente de Vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                    // Término: Gerente de Vendas

                )
            ),
            // Término: Diretor comercial
            // Início: Diretor Financeiro
            array(
                'nome_cargo'=>'Gerente Financeiro',
                'subordinados'=>array(
                    // Início: Gerente contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de Contas a pagar',
                        'subordinados'=>array(
                            //Início: Supervisor de contas a pagar
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            //Término: Supervisor de contas a pagar
                        )
                    ),
                    // Témino: Gerente contas a pagar
                    // Início: Gerente de compras
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            // Início: Supervisor de Suprimentos
                            array(
                                'nome_cargo'=>'Supervisor de Suprimentos',
                                'subordinados'=>array(
                                    array(
                                        'nome_cargo'=>'Funcionário'
                                    )

                                )
                            )
                            // Término: Gerente de compras
                        )
                    )
                    // Término: Gerente de compras
)
)
            // Término: Diretor Financeiro
        )
    )
);

function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo){

        $html .="<li>";

        $html .=$cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

            $html .= exibe($cargo['subordinados']);

        }

        $html .="</li>";

    }

    $html .= '</ul>';

    return $html;

}

echo exibe($hierarquia);