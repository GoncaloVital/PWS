
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar dados </h1>
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
                                    <form action="router.php?c=empresa&a=update" method="post">
                                    <div class="text-muted">
                                        <p class="text-sm">Designação Social
                                            <input type="text" class="form-control" placeholder="Designacao Social" name="designacaosocial" value="<?php if(isset($empresa)) { echo $empresa->designacaosocial; }?>">
                                            <?php if(isset($empresa->errors)){ echo $empresa->errors->on('designacaosocial'); }?>
                                        </p>
                                        <p class="text-sm">Email
                                            <input type="text" class="form-control" placeholder="Email" name="email" value="<?php if(isset($empresa)) { echo $empresa->email; }?>">
                                            <?php if(isset($empresa->errors)){ echo $empresa->errors->on('email'); }?>
                                        </p>
                                        <p class="text-sm">Telefone
                                            <input type="text" class="form-control" placeholder="Telefone" name="telefone" minlength="9" maxlength="9" value="<?php if(isset($empresa)) { echo $empresa->telefone; }?>">
                                            <?php if(isset($empresa->errors)){ echo $empresa->errors->on('telefone'); }?>
                                        </p>
                                        <p class="text-sm">NIF
                                            <input type="text" class="form-control" placeholder="NIF" name="nif" minlength="9" maxlength="9" value="<?php if(isset($empresa)) { echo $empresa->nif; }?>">
                                            <?php if(isset($empresa->errors)){ echo $empresa->errors->on('nif'); }?>
                                        </p>
                                        <p class="text-sm">Morada
                                            <input type="text" class="form-control" placeholder="Morada" name="morada" value="<?php if(isset($empresa)) { echo $empresa->morada; }?>">
                                            <?php if(isset($empresa->errors)){ echo $empresa->errors->on('morada'); }?>
                                        </p>
                                        <p class="text-sm">Cod. Postal
                                            <input type="text" class="form-control" placeholder="Codigo Postal" name="codpostal" value="<?php if(isset($empresa)) { echo $empresa->codpostal; }?>">
                                            <?php if(isset($empresa->errors)){ echo $empresa->errors->on('codpostal'); }?>
                                        </p>
                                        <p class="text-sm" >Localidade
                                            <input type="text" class="form-control" placeholder="Localidade" name="localidade" value="<?php if(isset($empresa)) { echo $empresa->localidade; }?>">
                                            <?php if(isset($empresa->errors)){ echo $empresa->errors->on('localidade'); }?>
                                        </p>
                                        <p class="text-sm">Capital Social
                                            <input type="text" class="form-control" placeholder="Capital Social" name="capitalsocial" value="<?php if(isset($empresa)) { echo $empresa->capitalsocial; }?>">
                                            <?php if(isset($empresa->errors)){ echo $empresa->errors->on('capitalsocial'); }?>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                            <button type="submit" class="btn btn-primary" >Editar</button>
                        </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

    </section>
    <!-- Main content -->

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->









