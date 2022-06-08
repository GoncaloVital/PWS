<?php
include_once 'models\Auth.php';
include_once '.\controlers\BaseController.php';

class AuthController extends BaseController
{
    public function index()
    {
        $this->makeView('login', 'index');
    }

    public function login()
    {

        if(isset($_POST['username'], $_POST['password']))
        {
            $auth = new Auth();
            if ($auth ->checkLogin($_POST['username'], $_POST['password']) == true)
            {
                $userRole = $auth->getRole();
                if($userRole == 'cliente')
                {

                    $this-> redirectToRoute('dashboardClientBO', 'index');
                }
                else{

                    $this-> redirectToRoute('dashboardBO', 'index');
                }

            }
            else{
                $this-> redirectToRoute('login', 'index');
            }
        }
    }

    public function logout()
    {
        $auth = new Auth();
        $auth ->logout();
        $this-> redirectToRoute('login', 'index');
    }
}