<?php


class IvaController extends BaseAuthController
{
    public function index(){
        $this->loginFilterByRole(['administrador', 'funcionario']);
        $ivas = Iva::all();
        $this->makeView('iva', 'index', ['ivas' => $ivas]);
    }

    public function create()
    {
        $vigors = Vigor::all();
        $this->makeView('iva', 'create', ['vigors' => $vigors]);
    }
    public function store()
    {
        $iva = new Iva($_POST);
        if($iva->is_valid()){
            $iva->save();
            $this->redirectToRoute('iva','index');
        } else {

            $this->makeView('iva', 'create', ['iva'=>$iva]);
        }
    }

    public function edit($idIva)
    {
        $ivas = Iva::all();
        if (is_null($ivas)) {
            //TODO redirect to standard error page
        } else {
            $vigors = Vigor::all();
            $this->makeView('iva', 'edit', ['idIva' => $idIva,'ivas' => $ivas, 'vigors' => $vigors]);
        }
    }
    public function update($id)
    {
        $iva = Iva::find([$id]);
        $iva->update_attributes($_POST);
        if($iva->is_valid()){
            $iva->save();
            $this-> redirectToRoute('iva', 'index');
        } else {
            $vigors = Vigor::all();
            $this->makeView('iva', 'edit', ['iva' => $iva, 'vigors' => $vigors]);
        }
    }


}