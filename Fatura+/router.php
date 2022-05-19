<?php
require_once '.\controlers\LoginController.php';
require_once '.\controlers\SiteController.php';
require_once '.\startup\boot.php';


// ******* Rota por omissao *******

if (!isset($_GET['c'], $_GET['a'])) // negação do isset, quando nao ha parametros !isset apresenta a Homepage por omissao
{
   // $controller = new LoginController();
    $controller = new SiteController();
    $controller ->index();
}

// ******* Rotas da aplicação *******
else {
    $c = $_GET['c']; // controller
    $a = $_GET['a']; // action -> metodo

    switch ($c) // Controler
    {
        case 'login':
            $loginController = new LoginController();
            switch ($a) {
                case 'index':
                    $loginController->index();
                    break;
                case 'login':
                    $loginController->login();
                    break;
                case 'logout':
                    $loginController->logout();
                    break;
            }
            break;

        case 'site':
            $siteControler = new SiteController();
            switch ($a) {
                case'index':
                    $siteControler->index();
                    break;
            }
            break;

        case 'book':
            $bookController = new BookController();
            switch ($a) {
                case'index':
                    $bookController->index();
                    break;
                case'show':
                    $bookController->show($_GET['id']);
                    break;
                case'create':
                    $bookController->create();
                    break;
                case'store':
                    $bookController->store();
                    break;
                case'edit':
                    $bookController->edit($_GET['id']);
                    break;
                case'update':
                    $bookController->update($_GET['id']);
                    break;
                case'delete':
                    $bookController->delete($_GET['id']);
                    break;
            }
            break;
        case 'chapter':
            $chapterController = new ChapterController();
            switch ($a) {
                case'index':
                    $chapterController->index($_GET['id']);
                    break;
                case'create':
                    $chapterController->create($_GET['id']);
                    break;
                case'store':
                    $chapterController->store();
                    break;
                case'delete':
                    $chapterController->delete($_GET['id']);
                    break;
                case'edit':
                    $chapterController->edit($_GET['id']);
                    break;
                case'update':
                    $chapterController->update($_GET['id']);
                    break;
            }
            break;
        default:
            echo 'A ROTA NAO EXISTE!';
            break;
    }
}
