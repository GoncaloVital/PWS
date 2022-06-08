<?php

class ProdutoController extends BaseAuthController
{
    public function index()
    {
        $produtos = Produto::all();
        $this->makeView('produto', 'index', ['produtos' => $produtos]);
    }

    public function show($id)
    {
        $produtos = Produto::find([$id]);
        if (is_null($produtos)) {
            //TODO redirect to standard error page
        } else {
            $this->makeView('produto', 'show', ['produtos' => $produtos]);
        }
    }

    public function create()
    {
        $ivas= Iva::all();
        $this->makeView('produto', 'create', ['ivas' => $ivas]);
    }

    public function store()
    {
        $produtos = new Produto($_POST);

        if($produtos->is_valid()){
            $produtos->save();
            $this-> redirectToRoute('produto', 'index');
        } else {
            $ivas= Iva::all();
            $this->makeView('produto', 'create',  ['produtos' => $produtos, 'ivas' => $ivas]);
        }
    }

    public function edit($id)
    {
        $produtos = Produto::find([$id]);

        if (is_null($produtos)) {
            //TODO redirect to standard error page
        } else {
            $ivas = Iva::all();
            $this->makeView('produto', 'edit', ['produtos' => $produtos, 'ivas' => $ivas]);
        }
    }
    public function update($id)
    {

        $produtos = Produto::find([$id]);
        $produtos->update_attributes($_POST);
        if($produtos->is_valid()){
            $produtos->save();
            $this-> redirectToRoute('produto', 'index');
        } else {
            $ivas = Iva::all();
            $this->makeView('produto', 'edit', ['produtos' => $produtos, 'ivas' => $ivas]);
        }
    }

}