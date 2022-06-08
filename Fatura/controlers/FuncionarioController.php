<?php

class FuncionarioController extends BaseAuthController
{
    public function index(){
        $this->loginFilterByRole(['administrador', 'funcionario']);
        $users = User::all();
        $this->makeView('funcionario', 'index', ['users' => $users]);
    }
    public function create()
    {
        $this->makeView('funcionario', 'create');
    }
    public function store()
    {
        $users = new User($_POST);
        if($users->is_valid()){
            $users->save();
            $this->redirectToRoute('funcionario','index');
        } else {
            $this->makeView('funcionario', 'create', ['users' => $users]);
        }
    }

    public function edit($id)
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
}