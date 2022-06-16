
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Selecione um produto</h1>
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

                    <!-- TABLE: Clientes -->
                    <div class="card">
                        <div class="card-header border-transparent ">
                            <h3 class="card-title">Lista de Produtos</h3>
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
                                        <th>Descricao</th>
                                        <th>Referecia</th>
                                        <th>Preço</th>
                                        <th>Stock</th>
                                        <th>IVA</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php if(is_null($fatura->linhafaturas)) {
                                        foreach ($produtos as $produto) {
                                        if ($produto->stock != null) {?>
                                    <tr>
                                        <td><?=$produto->descricao?></td>
                                        <td><?=$produto->referencia?></td>
                                        <td><?=$produto->preco.'€'?></td>
                                        <td><?=$produto->stock?></td>
                                        <td><?=$produto->iva->percentagem.'%'?></td>
                                        <td><a href="router.php?c=linhaFatura&a=create&idProduto=<?=$produto->id?>&id=<?=$idFatura?>" class="btn btn-sm btn-info float-left">Selecionar</a></td>
                                    </tr>

                                    <?php  } } }
                                    foreach ($produtos as $produto){
                                        if ($produto->stock != null) {?>
                                            <tr>
                                                <td><?=$produto->descricao?></td>
                                                <td><?=$produto->referencia?></td>
                                                <td><?=$produto->preco.'€'?></td>
                                                <td><?=$produto->stock?></td>
                                                <td><?=$produto->iva->percentagem.'%'?></td>
                                                <td><a href="router.php?c=linhaFatura&a=create&idProduto=<?=$produto->id?>&id=<?=$idFatura?>" class="btn btn-sm btn-info float-left">Selecionar</a></td>
                                            </tr>
                                        <?php } } ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">

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



