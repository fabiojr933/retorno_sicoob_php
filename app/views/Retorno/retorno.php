<div class="col-9 home">
				  <div class="caixa">										
					<div class="conteudo pt-3">

					<?php 
$this->verMSG();
$this->verERRO();     
?>

						<div class="titulo mb-0"><i class="far fa-list-alt"></i> Resuldado do retorno banco Sicoob</span></div>
						
						<div class="base-caixa formulario mb-4 mostraFiltro">							
							<form action="<?php echo URL_BASE."Cliente/pesquisar" ?>" method="POST">
								<div class="rows">
								<div class="col-2 mt-4 pt-1">
										<input type="submit" value="Pesquisar" class="btn d-table m-auto">
									</div>
								</div>
							</form>
						</div>
						<div class="base-caixa">							
	
							<div class="tabela-responsiva">								
							<table width="100%" cellpadding="0" cellspacing="0" class="tabela" id="dataTable">
								<thead>
								<tr>
									<th width="10%" align="left">Tipo Movimento:</th>
									<th  align="left">banco:</th>
									<th  align="left">Nosso Numero:</th>                                    
                                    <th width="90%" align="left">Cliente:</th>
                                    <th  align="left">Vencimento:</th>
                                    <th width="0%" align="left">Pagamento:</th>
                                    <th width="0%" align="left">valor:</th>
                                    <th width="0" align="left">Juros e Multa:</th>
                                    <th width="0%" align="left">Parcela:</th>                                    
                                    <th width="0%" align="left">Valor Tarifa:</th>
                                    <th width="0%" align="left">Valor Recebido:</th>	
                                    <th width="0%" align="left">vlr_liquido:</th>
                                    <th width="0%" align="left">Documento:</th>	

								</tr>
								</thead>
								<tbody>
									<?php foreach($boletos as $retorno) {  ?>	 
                                                                           				
									<tr>
										<td ><?php 

                                        
                                        if ($retorno->codigo_movimento == 2) {
                                            echo "Entrada Confirmada";
                                        }
                                        if ($retorno->codigo_movimento == 3) {
                                            echo "Entrada Rejeitada";
                                        }
                                        if ($retorno->codigo_movimento == 4) {
                                            echo "Transfer??ncia de Carteira/Entrada";
                                        }
                                        if ($retorno->codigo_movimento == 5) {
                                            echo "Transfer??ncia de Carteira/Baixa";
                                        }
                                        if ($retorno->codigo_movimento == 6) {
                                            echo "Liquida????o";
                                        }
                                        if ($retorno->codigo_movimento == 7) {
                                            echo "Confirma????o do Recebimento da Instru????o de Desconto";
                                        }
                                        if ($retorno->codigo_movimento == 8) {
                                            echo "Confirma????o do Recebimento do Cancelamento do Desconto";
                                        }
                                        if ($retorno->codigo_movimento == 9) {
                                            echo "Baixa";
                                        }
                                        if ($retorno->codigo_movimento == 11) {
                                            echo "T??tulos em Carteira (Em Ser)";
                                        }
                                        if ($retorno->codigo_movimento == 12) {
                                            echo "Confirma????o Recebimento Instru????o de Abatimento";
                                        }
                                        if ($retorno->codigo_movimento == 13) {
                                            echo "Confirma????o Recebimento Instru????o de Cancelamento Abatimento";
                                        }
                                        if ($retorno->codigo_movimento == 14) {
                                            echo "Confirma????o Recebimento Instru????o Altera????o de Vencimento";
                                        }
                                        if ($retorno->codigo_movimento == 15) {
                                            echo "Franco de Pagamento";
                                        }
                                        if ($retorno->codigo_movimento == 17) {
                                            echo "Liquida????o Ap??s Baixa ou Liquida????o T??tulo N??o Registrado";
                                        }
                                        if ($retorno->codigo_movimento == 19) {
                                            echo "Confirma????o Recebimento Instru????o de Protesto";
                                        }
                                        if ($retorno->codigo_movimento == 20) {
                                            echo "Confirma????o Recebimento Instru????o de Susta????o/Cancelamento de Protesto";
                                        }
                                        if ($retorno->codigo_movimento == 23) {
                                            echo "Remessa a Cart??rio (Aponte em Cart??rio)";
                                        }
                                        if ($retorno->codigo_movimento == 24) {
                                            echo "Retirada de Cart??rio e Manuten????o em Carteira";
                                        }
                                        if ($retorno->codigo_movimento == 25) {
                                            echo "Protestado e Baixado (Baixa por Ter Sido Protestado)";
                                        }
                                        if ($retorno->codigo_movimento == 26) {
                                            echo "Instru????o Rejeitada";
                                        }
                                        if ($retorno->codigo_movimento == 27) {
                                            echo "Confirma????o do Pedido de Altera????o de Outros Dados";
                                        }
                                        if ($retorno->codigo_movimento == 28) {
                                            echo "D??bito de Tarifas/Custas";
                                        }
                                        if ($retorno->codigo_movimento == 29) {
                                            echo "Ocorr??ncias do Pagador";
                                        }
                                        if ($retorno->codigo_movimento == 30) {
                                            echo "Altera????o de Dados Rejeitada";
                                        }
                                        if ($retorno->codigo_movimento == 33) {
                                            echo "Confirma????o da Altera????o dos Dados do Rateio de Cr??dito";
                                        }
                                        if ($retorno->codigo_movimento == 34) {
                                            echo "Confirma????o do Cancelamento dos Dados do Rateio de Cr??dito";
                                        }
                                        if ($retorno->codigo_movimento == 35) {
                                            echo "Confirma????o do Desagendamento do D??bito Autom??tico";
                                        }
                                        if ($retorno->codigo_movimento == 36) {
                                            echo "Confirma????o de envio de e-mail/SMS";
                                        }
                                        if ($retorno->codigo_movimento == 37) {
                                            echo "Envio de e-mail/SMS rejeitado";
                                        }
                                        if ($retorno->codigo_movimento == 38) {
                                            echo "Confirma????o de altera????o do Prazo Limite de Recebimento (a data deve ser";
                                        }
                                        if ($retorno->codigo_movimento == 39) {
                                            echo "Confirma????o de Dispensa de Prazo Limite de Recebimento";
                                        }
                                        if ($retorno->codigo_movimento == 40) {
                                            echo "Confirma????o da altera????o do n??mero do t??tulo dado pelo Benefici??rio";
                                        }
                                        if ($retorno->codigo_movimento == 41) {
                                            echo "Confirma????o da altera????o do n??mero controle do Participante";
                                        }
                                        if ($retorno->codigo_movimento == 42) {
                                            echo "Confirma????o da altera????o dos dados do Pagador";
                                        }
                                        if ($retorno->codigo_movimento == 43) {
                                            echo "Confirma????o da altera????o dos dados do Pagadorr/Avalista";
                                        }
                                        if ($retorno->codigo_movimento == 44) {
                                            echo "T??tulo pago com cheque devolvido";
                                        }
                                        if ($retorno->codigo_movimento == 45) {
                                            echo "T??tulo pago com cheque compensado";
                                        }
                                        if ($retorno->codigo_movimento == 46) {
                                            echo "Instru????o para cancelar protesto confirmada";
                                        }
                                        if ($retorno->codigo_movimento == 47) {
                                            echo "Instru????o para protesto para fins falimentares confirmada";
                                        }
                                        if ($retorno->codigo_movimento == 48) {
                                            echo "Confirma????o de instru????o de transfer??ncia de carteira/modalidade de cobran??a";
                                        }
                                        if ($retorno->codigo_movimento == 49) {
                                            echo "Altera????o de contrato de cobran??a";
                                        }
                                        if ($retorno->codigo_movimento == 50) {
                                            echo "T??tulo pago com cheque pendente de liquida????o";
                                        }
                                        if ($retorno->codigo_movimento == 51) {
                                            echo "T??tulo DDA reconhecido pelo Pagador";
                                        }
                                        if ($retorno->codigo_movimento == 52) {
                                            echo "T??tulo DDA n??o reconhecido pelo Pagador";
                                        }
                                        if ($retorno->codigo_movimento == 53) {
                                            echo "T??tulo DDA recusado pela CIP";
                                        }
                                        if ($retorno->codigo_movimento == 54) {
                                            echo "Confirma????o da Instru????o de Baixa de T??tulo Negativado sem Protesto";
                                        }
                                        if ($retorno->codigo_movimento == 55) {
                                            echo "Confirma????o de Pedido de Dispensa de Multa";
                                        }
                                        if ($retorno->codigo_movimento == 56) {
                                            echo "Confirma????o do Pedido de Cobran??a de Multa";
                                        }
                                        if ($retorno->codigo_movimento == 57) {
                                            echo "Confirma????o do Pedido de Altera????o de Cobran??a de Juros";
                                        }
                                        if ($retorno->codigo_movimento == 58) {
                                            echo "Confirma????o do Pedido de Altera????o do Valor/Data de Desconto";
                                        }
                                        if ($retorno->codigo_movimento == 59) {
                                            echo "Confirma????o do Pedido de Altera????o do Benefici??rio do T??tulo";
                                        }
                                        if ($retorno->codigo_movimento == 60) {
                                            echo "Confirma????o do Pedido de Dispensa de Juros de Mora";
                                        }
                                        if ($retorno->codigo_movimento == 85) {
                                            echo "Confirma????o de Desist??ncia de Protesto";
                                        }
                                        if ($retorno->codigo_movimento == 86) {
                                            echo "Confirma????o de cancelamento do Protesto";
                                        }
                                        
                                        
                                         ?></td>
										<td ><?php echo $retorno->codigo_banco ?></td>
										<td ><?php echo $retorno->nosso_numero ?></td>	                                       	
                                        <td ><?php echo $retorno->nome_pagador ?></td>	
                                        <td ><?php echo databr($retorno->vencimento) ?></td>	
                                        <td ><?php echo databr($retorno->R3U->data_ocorrencia) ?></td>	
                                        <td ><?php echo moedaBr($retorno->valor) ?></td>
                                        <td ><?php echo $retorno->R3U->vlr_juros_multa ?></td>	
                                        <td ><?php echo $retorno->parcela ?></td>
                                        <td ><?php echo moedaBr($retorno->vlr_tarifa) ?></td>	
                                        <td ><?php echo moedaBr($retorno->R3U->vlr_pago) ?></td>	
                                        <td ><?php echo $retorno->R3U->vlr_liquido ?></td>	
                                        <td ><?php echo $retorno->seu_numero ?></td>
                                        
										
																			
									 </tr>	
									 <?php } ?>
								  
								</tbody>
								 
							</table>
							
						</div>
						</div>
					
					</div>
				</div>
			</div>	