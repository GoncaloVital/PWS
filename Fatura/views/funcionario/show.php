
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Atualizar dados</h1>
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
                            <h3 class="card-title"><?= $user->username?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="router.php?c=funcionario&a=update&id=<?=$user->id ?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="text" class="form-control" placeholder="Password"name="password" value="<?php if(isset($user)) { echo $user->password; }?>">
                                    <?php if(isset($user->errors)){ echo $user->errors->on('password'); }?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?php if(isset($user)) { echo $user->email; }?>">
                                    <?php if(isset($user->errors)){ echo $user->errors->on('email'); }?>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Editar</button>
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




