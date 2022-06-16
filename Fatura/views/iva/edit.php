
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Taxas de IVA</h1>
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
                            <h3 class="card-title">Taxas de Ivas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>Descricao</th>
                                        <th>Percentagem</th>
                                        <th>Em Vigor</th>
                                        <th>Editar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php foreach ($ivas as $iva) { ?>
                                        <?php if($iva->id == $idIva){ ?>
                                        <form action="router.php?c=iva&a=update&id=<?=$iva->id ?>" method="post">
                                    <tr>
                                        <td>
                                            <?=$iva->descricao?>
                                        </td>
                                        <td>
                                             <?=$iva->percentagem.'%'?>
                                        </td>
                                        <td>
                                            <select name="vigor_id" class="form-control"  style="width: 100px">

                                                <?php foreach($vigors as $vigor){?>
                                                    <?php if($vigor->id == $iva->vigor_id) { ?>
                                                        <option value="<?= $vigor->id?>" selected><?= $vigor->valor;?> </option>
                                                    <?php }
                                                    else { ?>
                                                        <option value="<?= $vigor->id?>"><?= $vigor->valor;?> </option>
                                                    <?php }
                                                } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary" style="background-color: green; border-color: green"><i class="nav-icon fa-solid fa-check" ></i></button>
                                            <a href="router.php?c=iva&a=index" class="btn btn-primary" style="background-color: red; border-color: red"><i class="nav-icon fa-solid fa-x"></i></a>
                                        </td>
                                    </tr>
                                    </form>
                                    <?php }else{?>
                                    <tr>
                                        <td><?=$iva->descricao?></td>
                                        <td><?= $iva->percentagem.'%' ?></td>
                                        <td><?=$iva->vigor->valor?></td>
                                        <td> <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a></td>
                                    </tr>
                                    <?php }}?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="#" class="btn btn-sm btn-info float-left">Adicionar Taxa</a>
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























