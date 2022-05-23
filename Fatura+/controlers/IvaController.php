<?php

class IVAController extends BaseAuthController
{
    public function index($id){
        $fatura = Fatura::find([$id]);
        $this->makeView('iva', 'index', ['fatura' => $fatura]);
    }

    public function create($id)
    {
        $fatura = fatura::find([$id]);
        $this->makeView('iva', 'create', ['fatura' => $fatura]);
    }
    public function store()
    {
        $iva = new IVA($_POST);
        if($iva->is_valid()){
            $iva->save();
            $this->redirectToRoute('iva','index',['id'=>$iva->fatura_id]);
        } else {
            $this->makeView('iva', 'create', ['iva'=>$iva]);
        }
    }

    public function edit($id)
    {
        $iva = IVA::find([$id]);
        if (is_null($iva)) {
            //TODO redirect to standard error page
        } else {
            $this->makeView('iva', 'edit', ['iva' => $iva]);
        }
    }
    public function update($id)
    {
        $iva = iva::find([$id]);
        $iva->update_attributes($_POST);
        if($iva->is_valid()){
            $iva->save();
            $this-> redirectToRoute('iva', 'index',['id' => $iva->fatura_id]);
        } else {
            $this->makeView('iva', 'edit', ['iva' => $iva]);
        }
    }
    public function delete($id)
    {
        $iva = IVA::find([$id]);
        $iva->delete();
        $this->redirectToRoute('iva', 'index', ['id' => $iva->fatura_id]);

    }
}