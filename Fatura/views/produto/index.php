
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Produtos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="router.php">Home</a></li>
                        <li class="breadcrumb-item active">Produtos</li>
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
                <div class="col-md-8">

                    <!-- TABLE: Funcionarios -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Lista de Produtos</h3>
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
                                        <th>Editar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php foreach ($produtos as $produto) { ?>
                                    <tr>
                                        <td><?=$produto->descricao?></td>
                                        <td><?=$produto->referencia?></td>
                                        <td><?=$produto->preco.'€'?></td>
                                        <td><?=$produto->stock?></td>
                                        <td><?=$produto->iva->percentagem.'%'?></td>
                                        <td> <a class="btn btn-info btn-sm" href="router.php?c=produto&a=edit&id=<?= $produto->id?>">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a></td>
                                    </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="router.php?c=produto&a=create" class="btn btn-sm btn-info float-left">Adicionar Produto</a>
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



