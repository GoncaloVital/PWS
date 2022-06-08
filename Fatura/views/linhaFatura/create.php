
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper " >
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Fatura</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="router.php">Home</a></li>
                        <li class="breadcrumb-item active">Fatura</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" >
        <div class="container-fluid" >
            <div class="row" >
                <div class="col-12" >

                    <!-- Main content -->
                    <div class="invoice p-3 mb-3" style="background-color: #fffffc; color: #0a0e14">
                        <!-- title row -->
                        <div class="row" >
                            <div class="col-12">
                                <h4>
                                    <b>Fatura Nº <?= $fatura->id?></b> <br>
                                    <small class="float">Data: <?= ($fatura->data)->Format('m/d/Y')?></small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <address> <br>
                                    <strong><?=$empresa->designacaosocial?></strong><br>
                                    <?=$empresa->morada?><br>
                                    <?=$empresa->localidade. ',' . $empresa->codpostal?><br>
                                    Telefone: <?=$empresa->telefone?><br>
                                    Email: <?=$empresa->email?>
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <address><br>
                                    <strong>Cliente:</strong><br>
                                    <?=$cliente->username?><br>
                                    <?=$cliente->morada?><br>
                                    <?=$cliente->localidade. ',' . $cliente->codpostal?><br>
                                    NIF: <?=$cliente->nif?><br>
                                </address>
                            </div>

                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>REF</th>
                                        <th>Descrição</th>
                                        <th>QTD</th>
                                        <th>Preço Unidade</th>
                                        <th>IVA</th>
                                        <th>Taxa</th>
                                        <th>SubTotal</th>
                                        <th>Editar</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <!-- foreach -->
                                    <form action="router.php?c=funcionario&a=store" method="post">
                                        <tr>
                                            <td>
                                                <a href="router.php?c=linhaFatura&a=selectProduto" class="btn btn-primary" >Escolher Produto</a>
                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                <!-- verificacao do numero de stock, o valor maximo é o valor do stock do produto -->
                                                <input type="number" class="form-control" placeholder="QTD" name="" min="1" style="width: 100px">
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-primary"><i class="nav-icon fa-solid fa-check"></i></button>
                                                <a href="router.php?c=linhaFatura&a=selectProduto" class="btn btn-primary" ><i class="nav-icon fa-solid fa-x"></i></a>
                                            </td>

                                        </tr>
                                    </form>


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row flex-row-reverse">

                            <!-- /.col -->
                            <div class="col-2">

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Subtotal:</th>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th>IVA:</th>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>0</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                Fatura Processada por <?= $_SESSION['username']?>
                                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                    Emitir
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



