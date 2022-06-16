<?php
require_once './models/LogicaFatura.php';
require_once './models/PDF.php';
use Carbon\Carbon;
use chillerlan\QRCode\QRCode;

class FaturaController extends BaseAuthController
{

    public function index($estado, $idCliente)
    {
        $faturas = Fatura::all();

        if(!is_null($idCliente))
        {
            $this->makeView('fatura', 'index', ['faturas' => $faturas, 'estado' => $estado, 'idCliente' => $idCliente]);
        }else{
            $idCliente = null;
            $this->makeView('fatura', 'index', ['faturas' => $faturas, 'estado' => $estado, 'idCliente' => $idCliente]);
        }
    }


    public function create()
    {
        $empresa = Empresa::find([1]);
        $this->makeView('fatura', 'create', [ 'empresa' => $empresa]);
    }

    public function store($idClient)
    {
        $fatura = new Fatura($_POST);
        $dateToday = Carbon::now();

        $fatura->data =  $dateToday;
        $fatura->valortotal = "0";
        $fatura->ivatotal = "0";
        $fatura->estado = 'em lancamento';
        $fatura->user_id =$idClient;

        if ($fatura->is_valid()) {
            $fatura->save();
            $this->redirectToRoute('linhaFatura', 'create', ['id' => $fatura->id]);
        } else {
            $this->makeView('fatura', 'create', ['faturas' => $fatura]);
        }
    }

    public function update($idFatura)
    {
        $idProduto = null;
        $fatura = Fatura::find([$idFatura]);
        $LogicaFatura = new LogicaFatura();
        $empresa = Empresa::find([1]);
        $cliente = User::find([$fatura->user_id]);
        $subtotal = $LogicaFatura->calcularSubTotal($fatura);
        $iva = $LogicaFatura->calcularIvaTotal($fatura);
        $total = $subtotal + $iva;

        $fatura->estado = 'Emitida';
        $fatura->valortotal = $total;
        $fatura->ivatotal = $iva;
        $error = '1';



        if($fatura->linhafaturas == null)
        {

            $this->makeView('linhaFatura', 'create', [ 'error' => $error,'id' => $idFatura, 'fatura' => $fatura, 'empresa' => $empresa, 'cliente' => $cliente, 'subtotal' => $subtotal, 'idProduto' => $idProduto]);

        }else {
            foreach ($fatura->linhafaturas as $linhafatura)
            {
                $produto = Produto::find([$linhafatura->produto->id]);
                $produto->stock =  $produto->stock - $linhafatura->quantidade;
                $produto->update_attribute('stock', $produto->stock);
                $produto->save();
            }
            $fatura->update_attributes([]);
            if($fatura->is_valid()){
                $fatura->save();
                $this-> redirectToRoute('fatura', 'show', ['idFatura' => $idFatura]);
            }
        }


    }
    public function show($idFatura)
    {
        $fatura = Fatura::find([$idFatura]);
        $empresa = Empresa::find([1]);
        $cliente = User::find([$fatura->user_id]);
        $LogicaFatura = new LogicaFatura();
        $subtotal = $LogicaFatura->calcularSubTotal($fatura);

        $link = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
        $QRCode = new QRCode();
        $data = 'http://'. $_SERVER['SERVER_ADDR'].'/Fatura/router.php?c=fatura&a=show&idFatura='.$idFatura;
        $code = $QRCode->render($link);



        if (is_null($fatura)) {
            //TODO redirect to standard error page
        } else {
            $this->makeView('fatura', 'show', ['code' => $code, 'fatura' => $fatura, 'empresa' => $empresa, 'cliente' => $cliente, 'subtotal' => $subtotal]);
        }
    }
    public function pdf($idFatura)
    {
        $fatura = Fatura::find([$idFatura]);
        $empresa = Empresa::find([1]);
        $cliente = User::find([$fatura->user_id]);
        $LogicaFatura = new LogicaFatura();
        $subtotal = $LogicaFatura->calcularSubTotal($fatura);
        $pdf = new PDF();
        $pdf->generatePDF($fatura, $empresa,  $cliente, $subtotal);

    }
    public function  selectClient()
    {
        $users = User::all();
        $this->makeView('fatura', 'selectClient',['users' => $users]);
    }

    public function delete($idFatura)
    {
        $fatura = Fatura::find([$idFatura]);

        foreach ($fatura->linhafaturas as $linhafatura)
        {
            $linhafatura->delete();
        }
        $fatura->delete();
        $this->redirectToRoute('fatura', 'create');
    }
}
