<?php


class EmpresaController extends BaseAuthController
{
    public function index($id){
        $this->loginFilterByRole(['administrador', 'funcionario']);
        $empresas = Empresa::find([$id]);
        //$empresas = Empresa::all();
        $this->makeView('empresa', 'index', ['empresas' => $empresas]);
    }

    public function edit($id)
    {
        $empresas = Empresa::find([$id]);
        if (is_null($empresas)) {
            //TODO redirect to standard error page
        } else {
            $this->makeView('empresa', 'edit', ['empresas' => $empresas]);
        }
    }
    public function update($id)
    {
        $empresas = Empresa::find([$id]);
        $empresas->update_attributes($_POST);
        if($empresas->is_valid()){
            $empresas->save();
            $this-> redirectToRoute('empresa', 'index');
        } else {
            $this->makeView('empresa', 'edit', ['empresas' => $empresas]);
        }
    }

}