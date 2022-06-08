<?php


class BOController extends BaseController
{
    public function index()
    {
        $this->makeView('dashboardBO', 'index');
    }
}