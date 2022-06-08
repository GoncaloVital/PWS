<?php
require_once './models/Auth.php';

class BaseController
{
    protected function makeView($controllerPrefix, $viewName, $params = [])
    {
        extract($params);
        $auth = new Auth();
        if($auth->isLoggedIn())
        {
            $username = $auth->getUsername();
            $userRole = $auth->getRole(); // 3 if ou navbar para cada role
            $userID = $auth->getUserId();
            require_once './views/layoutBO/header.php';
            require_once './views/'.$controllerPrefix. '/'. $viewName . '.php';
            require_once './views/layoutBO/footer.php';
        }
        else
        {

            require_once './views/'.$controllerPrefix. '/'. $viewName . '.php';

        }


    }
    /** $this->makeView('prefix', 'action'); */

    protected function redirectToRoute($controllerPrefix, $action, $params = [])
    {
        $url = 'Location: router.php?c='.$controllerPrefix.'&a='.$action;
        foreach ($params as $paramKey => $paramValue){
            $url.='&'.$paramKey.'='.$paramValue;
        }
        header($url);

    }
    /** $this-> redirectToRoute('prefix', 'action'); */

}