<?php

class ProtecaoController extends BaseAuthController
{
    public  function  __construct()
    {
        //Filtro de acesso para todos os metodos da classe do controlador
        $this->loginFilterByRole(['funcionario', 'administrador']);
    }
}