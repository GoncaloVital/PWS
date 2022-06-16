<?php
require_once '.\startup\boot.php';
require_once '.\controlers\AuthController.php';
require_once '.\controlers\SiteController.php';
require_once '.\controlers\BaseAuthController.php';
require_once '.\controlers\IvaController.php';
require_once '.\controlers\EmpresaController.php';
require_once '.\controlers\UserController.php';
require_once '.\controlers\ProdutoController.php';
require_once '.\controlers\FuncionarioController.php';
require_once '.\controlers\BOController.php';
require_once '.\controlers\ClienteBOController.php';
require_once '.\controlers\FaturaController.php';
require_once '.\controlers\LinhaFaturaController.php';


// ******* Rota por omissao *******

if (!isset($_GET['c'], $_GET['a'])) // negação do isset, quando nao ha parametros !isset apresenta a Homepage por omissao
{
   // $controller = new AuthController();
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
            $loginController = new AuthController();
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


        case 'layoutFO':
            $siteControler = new SiteController();
            switch ($a) {
                case'index':
                    $siteControler->index();
                    break;
            }
            break;

        case 'dashboardBO':
            $BOControler = new BOController();
            switch ($a) {
                case'index':
                    $BOControler->index($_GET['estado']);
                    break;
            }
            break;
        case 'dashboardClientBO':
            $ClientBOControler = new ClienteBOController();
            switch ($a) {
                case'index':
                    $ClientBOControler->index();
                    break;
            }
            break;

        case 'iva':
            $ivaController = new IvaController();
            switch ($a) {
                case'index':
                    $ivaController->index();
                    break;
                case'create':
                    $ivaController->create();
                    break;
                case'store':
                    $ivaController->store();
                    break;
                case'edit':
                    $ivaController->edit($_GET['idIva']);
                    break;
                case'update':
                    $ivaController->update($_GET['id']);
                    break;
            }
            break;
        case 'empresa':
            $empresaController = new EmpresaController();
            switch ($a) {
                case'index':
                    $empresaController->index();
                    break;
                case'edit':
                    $empresaController->edit();
                    break;
                case'update':
                    $empresaController->update();
                    break;
            }
            break;
        case 'user':
            $userController = new UserController();
            switch ($a) {
                case'index':
                    $userController->index();
                    break;
                case'create':
                    $userController->create();
                    break;
                case'store':
                    $userController->store();
                    break;
                case'edit':
                    $userController->edit($_GET['id']);
                    break;
                case'update':
                    $userController->update($_GET['id']);
                    break;
                case'show':
                    $userController->show($_GET['id']);
                    break;
            }
            break;
        case 'funcionario':
            $funcionarioController = new FuncionarioController();
            switch ($a) {
                case'index':
                    $funcionarioController->index();
                    break;
                case'create':
                    $funcionarioController->create();
                    break;
                case'store':
                    $funcionarioController->store();
                    break;
                case'edit':
                    $funcionarioController->edit($_GET['id']);
                    break;
                case'update':
                    $funcionarioController->update($_GET['id']);
                    break;
                case'show':
                    $funcionarioController->show($_GET['id']);
                    break;
            }
            break;
        case 'produto':
            $produtoController = new ProdutoController();
            switch ($a) {
                case'index':
                    $produtoController->index();
                    break;
                case 'select':
                    $produtoController->select($_GET['id']);
                    break;
                case'create':
                    $produtoController->create();
                    break;
                case'store':
                    $produtoController->store();
                    break;
                case'edit':
                    $produtoController->edit($_GET['idProduto']);
                    break;
                case'update':
                    $produtoController->update($_GET['id']);
                    break;
                case'show':
                    $produtoController->show($_GET['id']);
                    break;
            }
            break;
        case 'fatura':
            $faturaController = new FaturaController();
            switch ($a) {
                case'index':
                    if(isset($_GET['idCliente']))
                    {
                        $faturaController->index($_GET['estado'], $_GET['idCliente']);
                    }else
                    {
                        $faturaController->index($_GET['estado'], null);
                    }

                    break;
                case'selectClient':
                    $faturaController->selectClient();
                    break;
                case'create':
                    $faturaController->create();
                    break;
                case'store':
                    $faturaController->store($_GET['id']);
                    break;
                case'edit':
                    $faturaController->edit($_GET['id']);
                    break;
                case'update':
                        $faturaController->update($_GET['idFatura']);
                    break;
                case'show':
                    $faturaController->show($_GET['idFatura']);
                    break;
                case'pdf':
                    $faturaController->pdf($_GET['idFatura']);
                    break;
                case'delete':
                    $faturaController->delete($_GET['idFatura']);
                    break;
            }
            break;
        case 'linhaFatura':
            $linhaFaturaController = new LinhaFaturaController();
            switch ($a) {
                case'create':
                    if(isset($_GET['idProduto']))
                    {
                        $linhaFaturaController->create($_GET['id'], $_GET['idProduto']);
                    }else
                    {
                        $linhaFaturaController->create($_GET['id'], null);
                    }
                    break;
                case'store':
                    $linhaFaturaController->store($_GET['idFatura'], $_GET['idProduto']);
                    break;
                case'edit':
                    $linhaFaturaController->edit($_GET['idLinhaFatura'], $_GET['idFatura'],  $_GET['idProduto']);
                    break;
                case'update':
                    $linhaFaturaController->update($_GET['idLinhaFatura'], $_GET['idFatura']);
                    break;
                case'delete':
                    $linhaFaturaController->delete($_GET['idLinhaFatura'], $_GET['idFatura']);
                    break;
            }
            break;
        default:
            echo 'A ROTA NAO EXISTE!';
            break;
    }
}
