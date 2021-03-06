<?php

class UserController extends BaseAuthController
{
    public function index(){
        $users = User::all();
        $this->makeView('user', 'index', ['users' => $users]);
    }


    public function create()
    {

        $this->makeView('user', 'create');
    }
    public function store()
    {
        $users = new User($_POST);
        if($users->is_valid()){
            $users->save();
            $this->redirectToRoute('user','index');
        } else {
            $this->makeView('user', 'create', ['users' => $users]);
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

    public function show($id)
    {
        $user = User::find([$id]);
        if (is_null($user)) {
            //TODO redirect to standard error page
        } else {
            $this->makeView('user', 'show', ['user' => $user]);
        }
    }
}