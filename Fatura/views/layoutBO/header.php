<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=  APP_NAME ?></title>
    <link href="public/backoffice/profile/style.css" rel="stylesheet" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="public/backoffice/plugins/fontawesome-free/css/all.min.css">
    <script src="https://kit.fontawesome.com/d12ab3a458.js" ></script>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="public/backoffice/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/backoffice/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

</head>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
</svg>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble img-circle" src="public/backoffice/dist/img/logo.png"  height="60" width="60">
    </div>


    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <?php if($userRole == 'administrador' || $userRole == 'funcionario'){?>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="router.php?c=dashboardBO&a=index&estado=Emitida" class="nav-link">Dashboard</a>
            </li>
            <?php }?>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <?php
            if(isset($username))
            {?>

  <div class="collapse navbar-collapse" id="navbar-list-4">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?=$username ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php if($userRole == 'administrador' || $userRole == 'funcionario'){?>
                            <a class="dropdown-item" href="router.php?c=funcionario&a=show&id=<?= $_SESSION['id'] ?>">Editar Dados</a>
                            <?php }?>
                            <a class="dropdown-item" href="router.php?c=login&a=logout">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>

           <?php }
            else
            {?>
                  <li class="nav-item d-none d-sm-inline-block">
                            <a href="router.php?c=login&a=index" class="nav-link">Login</a>
                         </li>
           <?php }

            ?>

        </ul>
    </nav>
    <!-- /Right navbar links -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="router.php?c=dashboardBO&a=index&estado=Emitida" class="brand-link">
            <img src="public/backoffice/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?=  APP_NAME ?></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <?php
                     if($userRole == 'administrador' || $userRole == 'funcionario')
            {?>
                <!-- Empresa -->
                <li class="nav-header">Empresa</li>
                <li class="nav-item">
                    <a href="router.php?c=empresa&a=index&id=1" class="nav-link">
                        <i class="nav-icon fa-solid fa-building"></i>
                        <p>
                            Consultar Dados
                        </p>
                    </a>
                </li>
                <!--/Empresa-->
                <!-- Faturas-->
                <li class="nav-header">Faturas</li>
                <li class="nav-item">
                    <a href="router.php?c=fatura&a=index&estado=Emitida" class="nav-link">
                        <i class="nav-icon fa-solid fa-file-invoice"></i>
                        <p>
                             Emitidas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="router.php?c=fatura&a=index&estado=em lancamento" class="nav-link">
                        <i class="nav-icon fa-solid fa-file-invoice"></i>
                        <p>
                            Em Lançamento
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="router.php?c=fatura&a=create" class="nav-link">
                        <i class="nav-icon fa-solid fa-file-circle-plus"></i>
                        <p>
                            Emitir Fatura
                        </p>
                    </a>
                </li>

                        <!-- Produtos -->
                    <li class="nav-header">Produtos</li>
                    <li class="nav-item">
                        <a href="router.php?c=produto&a=index" class="nav-link">
                            <i class="nav-icon fa-solid fa-cube"></i>
                            <p>
                                Ver Produtos
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="router.php?c=produto&a=create" class="nav-link">
                            <i class="nav-icon fa-solid fa-circle-plus"></i>
                            <p>
                                  Adicionar Produtos
                            </p>
                        </a>
                    </li>
                    <!--/Produtos -->

                    <!-- Taxas de IVA -->
                    <li class="nav-header">Taxas de IVA</li>
                    <li class="nav-item">
                        <a href="router.php?c=iva&a=index" class="nav-link">
                            <i class="nav-icon fa-solid fa-percent"></i>
                            <p>
                                Ver Taxas
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="router.php?c=iva&a=create" class="nav-link">
                            <i class="nav-icon fa-solid fa-circle-plus"></i>
                            <p>
                            Adicionar Taxa
                            </p>
                        </a>
                    </li>
                    <!--/Taxas de IVA-->
            <?php }
                if($userRole == 'administrador'){
                    ?> <!-- Funcionarios -->
                    <li class="nav-header">Funcionarios</li>
                    <li class="nav-item">
                        <a href="router.php?c=funcionario&a=index" class="nav-link">
                            <i class="nav-icon fa-solid fa-user"></i>
                            <p>
                                Ver Funcionarios
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="router.php?c=funcionario&a=create" class="nav-link">
                            <i class="nav-icon fa-solid fa-user-plus"></i>
                            <p>
                                Registar Funcionario
                            </p>
                        </a>
                    </li>
                    <!--/Funcionarios -->
                    <!-- Clientes -->
                    <li class="nav-header">Clientes</li>
                    <li class="nav-item">
                        <a href="router.php?c=user&a=index" class="nav-link">
                            <i class="nav-icon fa-solid fa-user"></i>
                            <p>
                                Ver Clientes
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="router.php?c=user&a=create" class="nav-link">
                            <i class="nav-icon fa-solid fa-user-plus"></i>
                            <p>
                                Registar Cliente
                            </p>
                        </a>
                    </li>
                    <!--/Clientes -->
<?php } elseif ($userRole == 'funcionario'){ ?>
                   <!-- Clientes -->
                    <li class="nav-header">Clientes</li>
                    <li class="nav-item">
                        <a href="router.php?c=user&a=index" class="nav-link">
                            <i class="nav-icon fa-solid fa-user"></i>
                            <p>
                                Ver Clientes
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="router.php?c=user&a=create" class="nav-link">
                            <i class="nav-icon fa-solid fa-user-plus"></i>
                            <p>
                                Registar Cliente
                            </p>
                        </a>
                    </li>
                    <!--/Clientes -->

            <?php }else
                     {
                        ?>    <li class="nav-header">Faturas</li>
                                    <li class="nav-item">
                                         <a href="router.php?c=fatura&a=index&estado=Emitida&idCliente=<?= $_SESSION['id'] ?>" class="nav-link">
                                            <i class="nav-icon fa-solid fa-file-invoice"></i>
                                             <p>
                                                 Consultar Faturas
                                               </p>
                                           </a>
                                    </li>
                     <?php } ?>


                </ul>

                    <!-- /Faturas -->
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector(".menu");
            toggleMenu.classList.toggle("active");
        }
    </script>
