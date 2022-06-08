
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Clientes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="router.php">Home</a></li>
                        <li class="breadcrumb-item active">Clientes</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">





            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-12">

                    <!-- TABLE: Funcionarios -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Lista de Clientes</h3>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Telefone</th>
                                        <th>NIF</th>
                                        <th>Localidade</th>
                                        <th>Editar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <?php foreach ($users as $user) { ?>
                                    <tr>
                                        <?php if ($user->role == 'cliente') { ?>
                                        <td><?=$user->username?></td>
                                        <td><?=$user->telefone?></td>
                                        <td><?=$user->nif?></td>
                                        <td><?=$user->localidade?></td>
                                        <td> <a class="btn btn-info btn-sm" href="router.php?c=user&a=edit&id=<?= $user->id?>">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a></td>

                                    </tr>
                                    <?php }} ?>




                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="router.php?c=user&a=create" class="btn btn-sm btn-info float-left">Adicionar Cliente</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->


                <!-- /.row -->
            </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


