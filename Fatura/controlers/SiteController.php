<?php
include_once ('./controlers/BaseController.php');
class SiteController extends BaseController
{
    public function index()
    {
        $this->makeView('layoutFO', 'index');
    }
}