
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Faturas Emitidas</h1>
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

                    <!-- TABLE: Faturas -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Lista das Faturas Emitidas</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>Nº</th>
                                        <th>Data</th>
                                        <th>Cliente</th>
                                        <th>Valor</th>
                                        <th>Estado</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <?php  if(!is_null($idCliente)){
                                        foreach ($faturas as $fatura) { ?>
                                    <tr>
                                        <?php
                                        if($fatura->estado == $estado && $fatura->user_id == $idCliente){  ?>
                                        <td><?=$fatura->id?></td>
                                        <td><?=$fatura->data->format('Y-m-d')?></td>
                                        <td><?=$fatura->user->username?></td>
                                        <td><?=$fatura->valortotal . "€"?></td>
                                        <td><?=$fatura->estado?></td>
                                        <?php if($estado == 'Emitida'){ ?>
                                        <td>
                                            <a href="router.php?c=fatura&a=show&idFatura=<?=$fatura->id?>" class="btn btn-primary">Ver</a>
                                        </td>
                                        <?php }else{ ?>
                                        <td>
                                            <a href="router.php?c=linhaFatura&a=create&id=<?=$fatura->id?>" class="btn btn-primary">Emitir</a>
                                        </td>
                                    </tr>
                                    <?php } } } } else{
                                        foreach ($faturas as $fatura) { ?>
                                        <tr>
                                        <?php
                                        if($fatura->estado == $estado){  ?>
                                            <td><?=$fatura->id?></td>
                                            <td><?=$fatura->data->format('Y-m-d')?></td>
                                            <td><?=$fatura->user->username?></td>
                                            <td><?=$fatura->valortotal . "€"?></td>
                                            <td><?=$fatura->estado?></td>
                                            <?php if($estado == 'Emitida'){ ?>
                                                <td>
                                                    <a href="router.php?c=fatura&a=show&idFatura=<?=$fatura->id?>" class="btn btn-primary">Ver</a>
                                                </td>
                                            <?php }else{ ?>
                                                <td>
                                                    <a href="router.php?c=linhaFatura&a=create&id=<?=$fatura->id?>" class="btn btn-primary">Emitir</a>
                                                </td>
                                                </tr>
                                            <?php } } } }?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="router.php?c=fatura&a=create&id=1" class="btn btn-sm btn-info float-left">Emitir Fatura</a>
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
