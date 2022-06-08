
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?=$empresas->designacaosocial?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?=$empresas->designacaosocial?></li>
                    </ol>
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
                                <b class="d-block"><?=$empresas->designacaosocial?></b>
                            </p>
                            <p class="text-sm">Email
                                <b class="d-block"><?=$empresas->email?></b>
                            </p>
                            <p class="text-sm">Telefone
                                <b class="d-block"><?=$empresas->telefone?></b>
                            </p>
                            <p class="text-sm">NIF
                                <b class="d-block"><?=$empresas->nif?></b>
                            </p>
                            <p class="text-sm">Morada
                                <b class="d-block"><?=$empresas->morada?></b>
                            </p>
                            <p class="text-sm">Cod. Postal
                                <b class="d-block"><?=$empresas->codpostal?></b>
                            </p>
                            <p class="text-sm">Localidade
                                <b class="d-block"><?=$empresas->localidade?></b>
                            </p>
                            <p class="text-sm">Capital Social
                                <b class="d-block"><?=$empresas->capitalsocial.'€'?></b>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-left">Editar Dados</a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- Main content -->

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


