
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?=$empresa->designacaosocial?></h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
             <!-- Default box -->
                     <div class="card card-primary">
                        <div class="card-header">
                              <h3 class="card-title ">Dados</h3>
                         </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <div class="text-muted">
                            <p class="text-sm">Designação Social
                                <b class="d-block"><?=$empresa->designacaosocial?></b>
                            </p>
                            <p class="text-sm">Email
                                <b class="d-block"><?=$empresa->email?></b>
                            </p>
                            <p class="text-sm">Telefone
                                <b class="d-block"><?=$empresa->telefone?></b>
                            </p>
                            <p class="text-sm">NIF
                                <b class="d-block"><?=$empresa->nif?></b>
                            </p>
                            <p class="text-sm">Morada
                                <b class="d-block"><?=$empresa->morada?></b>
                            </p>
                            <p class="text-sm">Cod. Postal
                                <b class="d-block"><?=$empresa->codpostal?></b>
                            </p>
                            <p class="text-sm">Localidade
                                <b class="d-block"><?=$empresa->localidade?></b>
                            </p>
                            <p class="text-sm">Capital Social
                                <b class="d-block"><?=$empresa->capitalsocial.'€'?></b>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer clearfix">
                <a href="router.php?c=empresa&a=edit" class="btn btn-sm btn-secondary float-left">Editar Dados</a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- Main content -->

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


