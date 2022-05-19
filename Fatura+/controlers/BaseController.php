<?php
require_once './models/Login.php';

class BaseController
{
    protected function makeView($controllerPrefix, $viewName, $params = [])
    {
        extract($params);
        $login = new Login();
        if($login->isLoggedIn())
        {
            $username = $login->getUsername();
        }

        require_once './views/layout/header.php';
        require_once './views/'.$controllerPrefix. '/'. $viewName . '.php';
        require_once './views/layout/footer.php';
    }
    /** $this->makeView('prefix', 'action'); */

    protected function redirectToRoute($controllerPrefix, $action, $params = [])
    {
        $url = 'Location: router.php?c='.$controllerPrefix.'&a='.$action;
        foreach ($params as $paramKey => $paramValue){
            $url.='&'.$paramKey.'='.$paramValue;
        }
        header($url);
        //header('Location: router.php?c='.$controllerPrefix.'&a='.$action);
    }
    /** $this-> redirectToRoute('prefix', 'action'); */

}