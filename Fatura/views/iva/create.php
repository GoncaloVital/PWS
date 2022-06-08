
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Adicionar Taxa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="router.php">Home</a></li>
                        <li class="breadcrumb-item active">Adicionar Taxa</li>
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
                        <form action="router.php?c=iva&a=store" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Percentagem</label>
                                    <input type="text" class="form-control" placeholder="Percentagem" name="percentagem" value="<?php if(isset($ivas)) { echo $ivas->percentagem; }?>">
                                    <?php if(isset($ivas->errors)){ echo $ivas->errors->on('percentagem'); }?>
                                </div>
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <input type="text" class="form-control" placeholder="Descricao" name="descricao" value="<?php if(isset($ivas)) { echo $ivas->descricao; }?>">
                                    <?php if(isset($ivas->errors)){ echo $ivas->errors->on('descricao'); }?>
                                </div>

                                <div class="form-group">
                                    <label for="ivas">Taxa de IVA</label>
                                    <select name="vigor_id" class="form-control">

                                        <?php foreach($vigors as $vigor){?>
                                            <?php if($vigor->id == $iva->vigor_id) { ?>
                                                <option value="<?= $vigor->id?>" selected><?= $vigor->valor;?> </option>
                                            <?php }
                                            else { ?>
                                                <option value="<?= $vigor->id?>"><?= $vigor->valor;?> </option>
                                            <?php }
                                        } ?>
                                    </select>

                                </div>




                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Adicionar Taxa</button>
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






<div class="col-sm-12 d-flex align-items-center justify-content-center">
    <form action="router.php?c=iva&a=store" method="post">
        <h2 class="text-left top-space">New Iva</h2>
        Percentagem <input type="text" name="percentagem" value="<?php if(isset($ivas)) { echo $ivas->percentagem; }?>">
        <?php if(isset($ivas->errors)){ echo $ivas->errors->on('percentagem'); }?><br><br>
        Descricao <input type="text" name="descricao" value="<?php if(isset($ivas)) { echo $ivas->descricao; }?>">
        <?php if(isset($ivas->errors)){ echo $ivas->errors->on('descricao'); }?><br><br>

        <label for="vigors"> Em vigor:</label>
        <select name="vigor_id">

            <?php foreach($vigors as $vigor){?>
                <?php if($vigor->id == $iva->vigor_id) { ?>
                    <option value="<?= $vigor->id?>" selected><?= $vigor->valor;?> </option>
                <?php }
                else { ?>
                    <option value="<?= $vigor->id?>"><?= $vigor->valor;?> </option>
                <?php }
            } ?>
        </select>
        <br><br>

        <input type="submit" value="Criar" class="btn btn-info">
        <a href="router.php?c=iva&a=index"><input type="button" value="Cancelar" class="btn btn-info"></a>
    </form>
</div>
