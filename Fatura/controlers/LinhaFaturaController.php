<?php
require_once './models/LogicaFatura.php';

class LinhaFaturaController extends BaseAuthController
{

    public function index()
    {
        $faturas = Fatura::all();
        $this->makeView('fatura', 'index', ['faturas' => $faturas]);
    }


    public function create($idFatura, $idProduto)
    {
        $fatura = Fatura::find([$idFatura]);
        $empresa = Empresa::find([1]);
        $cliente = User::find([$fatura->user_id]);
        $linhaFaturas = LinhaFatura::all();
        $LogicaFatura = new LogicaFatura();
        $subtotal = $LogicaFatura->calcularSubTotal($fatura);
        $maxQTD = 0;
        $error = null;


        if(!is_null($idProduto))
        {
            $produto = Produto::find([$idProduto]);
            if($fatura->linhafaturas == null)
                {
                    $maxQTD = $produto->stock;
                }
            else{
                foreach ($fatura->linhafaturas as $linhaFatura)
                {
                    if($linhaFatura->produto_id == $idProduto){
                        $maxQTD = $produto->stock - $linhaFatura->quantidade;

                    }else
                    {
                        $maxQTD = $produto->stock;
                    }
                }
            }
            $this->makeView('linhaFatura', 'create', ['error' => $error, 'maxQTD' => $maxQTD, 'subtotal' => $subtotal ,'fatura' => $fatura, 'empresa' => $empresa, 'cliente' => $cliente, 'idProduto' => $idProduto, 'produto' => $produto, 'linhaFaturas' => $linhaFaturas]);
        }else{

            $this->makeView('linhaFatura', 'create', ['error' => $error, 'subtotal' => $subtotal, 'fatura' => $fatura, 'empresa' => $empresa, 'cliente' => $cliente, 'idProduto' => $idProduto, 'linhaFaturas' => $linhaFaturas]);
        }
    }

    public function store($idFatura, $idProduto)
    {
        $fatura = Fatura::find([$idFatura]);
        $qtd = $_POST['quantidade'];
        $LogicaFatura = new LogicaFatura();
        $verificar = $LogicaFatura->verificarProduto($fatura, $idProduto, $qtd);
        if($verificar != null)
        {
            if($verificar->is_valid()) {
                $verificar->update_attribute('quantidade', $verificar->quantidade);
                $verificar->save();
                $this->redirectToRoute('linhaFatura', 'create', ['id' => $idFatura]);
                return;
            }
        }


        $linhaFatura = new  LinhaFatura($_POST);
        $linhaFatura->fatura_id = $idFatura;
        $linhaFatura->produto_id = $idProduto;

        if ($linhaFatura->is_valid()) {
            $linhaFatura->save();
            $this->redirectToRoute('linhaFatura', 'create', ['id' => $idFatura]);
        } else {
            $this->makeView('linhaFatura', 'create', ['id' => $idFatura]);
        }
    }

    public function edit($idLinhaFatura, $idFatura, $idProduto)
    {
        $linhaFatura = LinhaFatura::find([$idLinhaFatura]);
        $empresa = Empresa::find([1]);
        $fatura = Fatura::find([$idFatura]);
        $produto = Produto::find([$idProduto]);
        $cliente = User::find([$fatura->user_id]);
        if (is_null($linhaFatura)) {
            //TODO redirect to standard error page
        } else {
            $this->makeView('linhaFatura', 'edit', ['produto' => $produto ,'fatura' => $fatura, 'empresa' => $empresa, 'cliente' => $cliente, 'idProduto' => $idProduto, 'linhaFatura' => $linhaFatura, 'idLinhaFatura' => $idLinhaFatura]);
        }
    }

    public function update($idLinhaFatura, $idFatura)
    {
        $linhaFatura = LinhaFatura::find([$idLinhaFatura]);
        $linhaFatura->update_attributes($_POST);
        if($linhaFatura->is_valid()){
            $linhaFatura->save();

            $this->redirectToRoute('linhaFatura', 'create', ['id' => $idFatura]);
        } else {
            $this->makeView('linhaFatura', 'create', ['id' => $idFatura]);
        }
    }

    public function delete($idLinhaFatura, $idFatura)
    {
        $linhaFatura = LinhaFatura::find([$idLinhaFatura]);
        $linhaFatura->delete();
        $this->redirectToRoute('linhaFatura', 'create', ['id' => $idFatura]);
    }


}