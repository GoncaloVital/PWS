
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Produtos</h1>
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
                                        <th>IVA</th>
                                        <th>Stock</th>
                                        <th>Editar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($produtos as $produto) { ?>

                                        <?php if($produto->id == $idProduto){ ?>
                                        <form action="router.php?c=produto&a=update&id=<?=$produto->id ?>" method="post">
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Referencia" name="referencia"  value="<?=$produto->referencia?>">
                                            </td>
                                             <td>
                                                 <input type="text" class="form-control" placeholder="Descricao" name="descricao"  value=" <?=$produto->descricao?>">
                                             </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Preco" name="preco"  value="<?php if(isset($produtos)) { echo $produto->preco; }?>">
                                                <?php if(isset($produtos->errors)){ echo $produtos->errors->on('preco'); }?>
                                            </td>
                                            <td>
                                                <select name="iva_id" class="form-control">

                                                    <?php foreach($ivas as $iva){?>
                                                <?php if($iva->vigor_id == 1) { ?>
                                                        <?php if($iva->id == $produto->iva_id) { ?>
                                                            <option value="<?= $iva->id?>" selected><?= $iva->descricao;?> </option>
                                                        <?php }
                                                        else { ?>
                                                            <option value="<?= $iva->id?>"><?= $iva->descricao;?> </option>
                                                        <?php }
                                                    } }?>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="QTD" min="1" name="stock"  value="<?=$produto->stock?>" style="width: 70px">
                                            </td>
                                            <td>
                                                 <button type="submit" class="btn btn-primary" style="background-color: green; border-color: green"><i class="nav-icon fa-solid fa-check" ></i></button>
                                                 <a href="router.php?c=produto&a=index" class="btn btn-primary" style="background-color: red; border-color: red"><i class="nav-icon fa-solid fa-x"></i></a>
                                            </td>
                                        </tr>
                                            </form>

                                    <?php }else{?>
                                    <tr>
                                         <td><?=$produto->referencia?></td>
                                         <td><?=$produto->descricao?></td>
                                         <td><?=$produto->preco.'€'?></td>
                                         <td><?=$produto->iva->percentagem.'%'?></td>
                                         <td><?=$produto->stock?></td>
                                         <td> <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i> Edit</a></td>
                                    </tr>
                                        <?php }}?>


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="#" class="btn btn-sm btn-info float-left">Adicionar Produto</a>
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




