<?php
require_once './controlers/BaseController.php';
require_once './models/Login.php';

class BaseAuthController extends BaseController
{

    protected function loginFilter()
    {
        $auth = new Login();
        if (!$auth->isLoggedIn()) // negacao
        {
            header('Location: ./router.php?'. INVALID_ACCESS_ROUTE);
        }
    }
}