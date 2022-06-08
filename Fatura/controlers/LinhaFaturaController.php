<?php

class LinhaFaturaController extends BaseAuthController
{

    public function index()
    {
        $faturas = Fatura::all();
        $this->makeView('fatura', 'index', ['faturas' => $faturas]);
    }


    public function create($idFatura)
    {
        $fatura = Fatura::find([$idFatura]);
        $empresa = Empresa::find([1]);
        $cliente = User::find([$fatura->user_id]);


        $this->makeView('linhaFatura', 'create', ['fatura' => $fatura, 'empresa' => $empresa, 'cliente' => $cliente]);
    }

    public function store($idFatura)
    {
      $linhaFatura = new  LinhaFatura($_POST);
        $idFatura = Fatura::find([$idFatura]);
        if ($linhaFatura->is_valid()) {
            $linhaFatura->save();
            $this->redirectToRoute('linhaFatura', 'create', ['id' => $idFatura]);
        } else {
            $this->makeView('linhaFatura', 'create', ['id' => $idFatura]);
        }
    }

    public function edit($idLinhaFatura)
    {
        $users = User::find([$id]);
        if (is_null($users)) {
            //TODO redirect to standard error page
        } else {
            $roles = Role::all();
            $this->makeView('user', 'edit', ['users' => $users, 'roles' => $roles]);
        }
    }

    public function update($id)
    {
        $users = User::find([$id]);
        $users->update_attributes($_POST);
        if($users->is_valid()){
            $users->save();
            $this-> redirectToRoute('user', 'index');
        } else {
            $roles = Role::all();
            $this->makeView('user', 'edit', ['users' => $users, 'roles' => $roles]);
        }
    }

    public function show($id)
    {
        $user = User::find([$id]);
        if (is_null($user)) {
            //TODO redirect to standard error page
        } else {
            $this->makeView('user', 'show', ['user' => $user]);
        }
    }

    public function  selectProduto($idFatura)
    {
        $idFatura = Fatura::find([$idFatura]);
        $produtos = Produto::all();
        $this->makeView('linhaFatura', 'selectProduto',['produtos' => $produtos]);
    }
}