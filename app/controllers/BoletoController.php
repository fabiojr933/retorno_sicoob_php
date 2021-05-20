<?php

namespace app\controllers;

use app\core\Controller;
use CnabPHP\Retorno;

class BoletoController extends Controller
{
    public function index()
    {
        $dados["view"]       = "Retorno/novo";
        $this->load("template", $dados);

    }
    public function novo()
    {
        $dados["view"]       = "Retorno/novo";
        $this->load("template", $dados);

    }
    public function Retorno()
    {
        $_UP['pasta'] = 'retorno/';
        $nome_final = $_FILES['arquivo']['name'];

        // Depois verifica se é possível mover o arquivo para a pasta escolhida
        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
            // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
        //    echo "Upload efetuado com sucesso!";
        //    echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
            } else {
            // Não foi possível fazer o upload, provavelmente a pasta está incorreta
            echo "Não foi possível enviar o arquivo, tente novamente";
            }  
       
        
       
  

        $fileContent = file_get_contents("retorno/".$nome_final);   

        $arquivo = new Retorno($fileContent); 

        $registros = $arquivo->getRegistros();  
        $dados["boletos"]       = $registros;        
        $dados["view"]   =   "Retorno/retorno";
        $this->load("template", $dados);          
       
       

/*
        foreach ($registros as $registro) {
            
                     
                $banco           = $registro->codigo_banco;
                $seu_numero      = $registro->seu_numero;
                $nome_pagador    = $registro->nome_pagador;
                $vencimento      = $registro->vencimento;
                $data_credito    = $registro->data_credito;
                $parcela         = $registro->parcela;
                $nossoNumero     = $registro->nosso_numero;
                $valor           = $registro->valor; 
                $valorRecebido   = $registro->R3U->vlr_pago;
                $dataPagamento   = $registro->R3U->data_ocorrencia;
                $vlr_tarifa      = $registro->vlr_tarifa;
                $cod_movimento   = $registro->codigo_movimento;

                if($cod_movimento == 2){
                    $cod_movimento = "Entrada confirmada";
                }
                if($cod_movimento == 3){
                    $cod_movimento = "Entrada rejeitada";
                }
                if($cod_movimento == 6){
                    $cod_movimento = "Liquidação";
                }
                if($cod_movimento == 9){
                    $cod_movimentoo = "Baixa";
                }
                if($cod_movimento == 11){
                    $cod_movimento = "Titulo em carteira";
                }
                if($cod_movimento == 23){
                    $cod_movimento = "Remessa a Cartorio";
                }
                if($cod_movimento == 28){
                    $cod_movimento = "Debito Tarifas/custas";
                }

                $items .= re[ $cod_movimento, $banco, $nossoNumero, $seu_numero, $nome_pagador, $vencimento, $dataPagamento,
                $data_credito, $parcela, $valor, $valorRecebido, $vlr_tarifa, $valorRecebido ]; 

              
        } */
       
        
       
    }
}
