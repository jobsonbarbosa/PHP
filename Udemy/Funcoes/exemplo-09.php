<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' =>array(
            //inicio? Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //inicio: gerente de vendas
                    array(
                        'nome_cargo'=>'Gerente de vendas'
                    )
                    //termino: gerente de vendas
                )
            ),
            //termino: Diretor Comercial
            //inicio: Diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //inicio: Gerente de contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de contas a pagar',
                        'subordinados'=>array(
                            //Inicio supervidor de pagamentos
                            'nome_cargo'=>'Supervidor de pagamentos',
                        )
                        //temino: Supervisor de pagamentos
                    )
                ),
                    //termino: Gerende de contas a pagar
                    //inicio: Gerente de compras
                    array(
                        'nome_cargo'=>'Gerente de compras',
                        'subordinados'
                    )
                    //termino gerente de compras
                )
            )
            //termino: Diretorn Financeito
        )

    );

    function exibe($cargos) {
        $html = '<ul>';

            foreach ($cargos as $cargo) {
                $html .= "<li>";

                $html .= $cargo['nome_cargo'];

                if(isset($cargo['subordinados']) && count($cargo['subordinados'])) {
                    $html .= exibe($cargo['subordinados']);
                }
                $html .= '</li>';
            }
        $html .='<ul>';

        return $html;
    }

    echo exibe($hierarquia);