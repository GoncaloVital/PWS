<?php

class ClienteBOController extends BaseController
{
    public function index()
    {
        $this->makeView('dashboardClientBO', 'index');
    }
}