
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Adicionar Produto</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="router.php">Home</a></li>
                        <li class="breadcrumb-item active">Adicionar Produto</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Introduza os dados</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="router.php?c=produto&a=store" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Referencia</label>
                                    <input type="text" class="form-control" placeholder="Referencia" name="referencia" value="<?php if(isset($produtos)) { echo $produtos->referencia; }?>">
                                    <?php if(isset($produtos->errors)){ echo $produtos->errors->on('referencia'); }?>
                                </div>
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <input type="text" class="form-control" placeholder="Descricao" name="descricao" value="<?php if(isset($produtos)) { echo $produtos->descricao; }?>">
                                    <?php if(isset($produtos->errors)){ echo $produtos->errors->on('descricao'); }?>
                                </div>
                                <div class="form-group">
                                    <label>Preço</label>
                                    <input type="text" class="form-control" placeholder="Preço €" name="preco" value="<?php if(isset($produtos)) { echo $produtos->preco; }?>">
                                    <?php if(isset($produtos->errors)){ echo $produtos->errors->on('preco'); }?>
                                </div>
                                <div class="form-group">
                                    <label>Stock</label>
                                    <input type="number" class="form-control" placeholder="Stock" name="stock"  value="<?php if(isset($produtos)) { echo $produtos->stock; }?>">
                                    <?php if(isset($produtos->errors)){ echo $produtos->errors->on('stock'); }?>
                                </div>

                                <div class="form-group">
                                    <label for="ivas">Taxa de IVA</label>
                                    <select name="iva_id" class="form-control">

                                        <?php foreach($ivas as $iva){?>
                                        <?php if($iva->vigor_id == 1) { ?>
                                            <?php if($iva->id == $produtos->iva_id) { ?>
                                                <option value="<?= $iva->id?>" selected><?= $iva->descricao;?> </option>
                                            <?php }
                                            else { ?>
                                                <option value="<?= $iva->id?>"><?= $iva->descricao;?> </option>
                                            <?php }
                                        }} ?>
                                    </select>

                                </div>




                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"> <i class="fa-solid fa-check"></i>Adicionar Produto</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->





