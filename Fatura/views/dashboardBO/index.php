
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $total ?></h3>

                            <p>Total de Faturas Emitidas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-document-text"></i>
                        </div>
                        <a href="router.php?c=fatura&a=index&estado=Emitida" class="small-box-footer">Ver faturas emitidas <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <!-- TABLE: Faturas -->
                    <div class="card">
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
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i = 1;
                                    foreach ($faturas as $fatura) { ?>

                                            <tr>
                                            <?php
                                            if($fatura->estado == $estado){  ?>
                                                <td><?=$fatura->id?></td>
                                                <td><?=$fatura->data->format('Y-m-d')?></td>
                                                <td><?=$fatura->user->username?></td>
                                                <td><?=$fatura->valortotal . "€"?></td>
                                                    </tr>
                                                <?php
                                                if($i == 10)
                                                    break;
                                                $i++; } } ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $totalMes?><sup style="font-size: 20px"></sup></h3>

                            <p>Total de Faturas Emitidas no Ultimo Mês</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Ver faturas emitidas no ultimo mês <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <!-- TABLE: Faturas -->
                    <div class="card">
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
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i = 1;
                                    foreach ($faturas as $fatura) {
                                        $date = strtotime($fatura->data);
                                        $faturaMonth = date("m", $date);?>

                                        <tr>
                                        <?php
                                        if($fatura->estado == $estado && $faturaMonth == $month){  ?>
                                            <td><?=$fatura->id?></td>
                                            <td><?=$fatura->data->format('Y-m-d')?></td>
                                            <td><?=$fatura->user->username?></td>
                                            <td><?=$fatura->valortotal . "€"?></td>
                                            </tr>
                                            <?php
                                            if($i == 10)
                                                break;
                                            $i++; } } ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6" >
                    <!-- small box -->
                    <div class="small-box bg-warning" >
                        <div class="inner" style="color: white">
                            <h3 style="color: white"><?= $totalClientes?></h3>

                            <p>Total de Clientes</p>
                        </div>
                        <div class="icon" >
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="router.php?c=user&a=index" class="small-box-footer">Ver todos os Clientes <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <!-- TABLE: Faturas -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>NIF</th>
                                        <th>Localidade</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i = 1;
                                    foreach ($users as $cliente) {?>
                                        <tr>
                                        <?php
                                        if($cliente->role == 'cliente'){  ?>
                                            <td><?=$cliente->username?></td>
                                            <td><?=$cliente->nif?></td>
                                            <td><?=$cliente->localidade?></td>
                                            </tr>
                                            <?php
                                            if($i == 10)
                                                break;
                                            $i++; } } ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- ./col -->



                <?php if($userRole == 'administrador'){?>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $totalFuncionarios?></h3>

                            <p>Funcionarios</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="router.php?c=funcionario&a=index" class="small-box-footer"> Ver todos os Funcionarios <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <!-- TABLE: Faturas -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>NIF</th>
                                        <th>Localidade</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i = 1;
                                    foreach ($users as $funcionario) {?>
                                        <tr>
                                        <?php
                                        if($funcionario->role == 'funcionario'){  ?>
                                            <td><?=$funcionario->username?></td>
                                            <td><?=$funcionario->nif?></td>
                                            <td><?=$funcionario->localidade?></td>
                                            </tr>
                                            <?php
                                            if($i == 10)
                                                break;
                                            $i++; } } ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
<?php }?>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


