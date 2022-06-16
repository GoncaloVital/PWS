<?php
require_once './vendor/autoload.php';

class PDF
{

public function generatePDF($fatura, $empresa,  $cliente, $subtotal)
{
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML('
						<table  autosize="1.6">
							<tr>
								<td class="title">
									<img src="./public/backoffice/img/logoPDF.png" style="width: 100%; max-width: 300px" />
								</td>
								<td style="width: 27%"></td>
<td>
</td>
							</tr>
						</table>
						
						<table style="margin-left: 1%">
						<tr>
						
<td style="padding-bottom: 3%">
<h3>
                                    <b>  Fatura Nº: ' .$fatura->id. '</b> <br>
                                    </h3>
                                    <h4><small>Data: '. ($fatura->data)->Format('m/d/Y').' </small></h4>
</td>
<td></td>
<td>
</td>
</tr>
						<tr>
						<td style="padding-bottom: 9%">
                                    <strong>Dados da empresa:</strong><br>
                                    ' .$empresa->designacaosocial. '
                                    '.$empresa->morada.'<br>
                                    '.$empresa->localidade. ',' . $empresa->codpostal.'<br>
                                    Telefone: '.$empresa->telefone.'<br>
                                    Email: '.$empresa->email.'
</td>
<td style="width: 43%"></td>
<td style="padding-bottom: 9%">
<strong>Dados do cliente:</strong><br>
                                    Nome: ' .$cliente->username. ' <br>
                                    Telefone: '.$cliente->telefone.'<br>
                                    NIF: '.$cliente->nif. '<br>
                                    Localidade: '.$cliente->localidade.'
</td>
</tr>
</table>
                                
');


    $mpdf->WriteHTML('
<table style="autosize:2.4; border-collapse: collapse; width: 100%">
<tr style="border:1px solid black; background-color: silver">
<td style="padding-right: 5%;">
Referência
</td>
<td style="padding-right: 37%;">
Descrição
</td>
<td style="padding-right: 4%; text-align: right">
Qtd
</td>
<td style="padding-right: 4%; text-align: right">
Preço(Un)
</td>
<td style="padding-right: 4%; text-align: right">
Taxa
</td>
<td style="padding-right: 4%; text-align: right">
Subtotal
</td>
</tr>
');
    foreach ($fatura->linhafaturas as $linhaFatura) {
        $mpdf->WriteHTML('
                    <tr style="border:1px solid black;">
                                            <td>' . $linhaFatura->produto->referencia . '</td>
                                            <td>' . $linhaFatura->produto->descricao . '</td>
                                            <td style="text-align: center">' . $linhaFatura->quantidade . '</td>
                                            <td>€' . $linhaFatura->valorunitario . '</td>
                                            <td>%' . $linhaFatura->produto->iva->percentagem . '</td>
                                            <td> €' . $linhaFatura->produto->preco * $linhaFatura->quantidade . '</td>
                                        </tr>
                    ');
    }
    $mpdf->WriteHTML('
                                </table>
<table>
<tr>
<td style="padding-bottom: 10%"></td>
</tr>
</table>
                                    <table style="margin-right: 20px; margin-left: auto">
                                        <tr>
                                            <th style="text-align: left">Subtotal:</th>
                                            <td>
                                                €'.$subtotal.'
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left"> IVA:</th>
                                            <td>€'.$fatura->ivatotal.'
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left">Total:</th>
                                            <td>€ '.$fatura->valortotal.'
                                            </td>
                                        </tr></td>
                                    </table>
');


    $mpdf->Output();
}


}