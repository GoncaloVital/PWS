<?php


class EmpresaController extends BaseAuthController
{
    public function index(){
        $this->loginFilterByRole(['administrador', 'funcionario']);
        $empresa = Empresa::find([1]);
        $this->makeView('empresa', 'index', ['empresa' => $empresa]);
    }

    public function edit()
    {
        $this->loginFilterByRole(['administrador', 'funcionario']);
        $empresa = Empresa::find([1]);
        if (is_null($empresa)) {
            //TODO redirect to standard error page
        } else {
            $this->makeView('empresa', 'edit', ['empresa' => $empresa]);
        }
    }
    public function update()
    {
        $this->loginFilterByRole(['administrador', 'funcionario']);
        $empresa = Empresa::find([1]);
        $empresa->update_attributes($_POST);
        if($empresa->is_valid()){
            $empresa->save();
            $this-> redirectToRoute('empresa', 'index');
        } else {
            $this->makeView('empresa', 'edit', ['empresa' => $empresa]);
        }
    }

}