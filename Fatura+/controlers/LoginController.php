<?php
include_once 'models\Login.php';
include_once './controlers/BaseController.php';
class LoginController extends BaseController
{
    public function index()
    {
        $this->makeView('login', 'index');
    }

    public function login()
    {
        if(isset($_POST['username'], $_POST['password']))
        {
            $login = new Login();
            if ($login ->checkLogin($_POST['username'], $_POST['password']) == true)
            {
                $this-> redirectToRoute('plano', 'index');
            }
            else{
                $this-> redirectToRoute('login', 'index');
            }
        }
    }

    public function logout()
    {
        $logout = new Login();
        $logout ->logout();
        $this-> redirectToRoute('login', 'index');
    }
}