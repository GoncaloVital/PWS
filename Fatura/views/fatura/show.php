
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper " >
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Fatura</h1>
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
                            <div class="col-sm-4 invoice-col">
                               <!-- <img src="" alt="QR Code"/> -->
                            </div>
                        </div>
                        <!-- /.row -->


                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th >REF</th>
                                        <th class="col-md-4">Descrição</th>
                                        <th class="col-md-1">QTD</th>
                                        <th class="col-md-1">Preço(UN)</th>
                                        <th class="col-md-1">Taxa</th>
                                        <th class="col-md-1">IVA</th>
                                        <th class="col-md-1">SubTotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    <?php foreach ($fatura->linhafaturas as $linhaFatura) { ?>
                                        <tr>
                                            <td><?=$linhaFatura->produto->referencia?></td>
                                            <td><?=$linhaFatura->produto->descricao?></td>
                                            <td><?=$linhaFatura->quantidade?></td>
                                            <td><?="€ ".$linhaFatura->valorunitario?></td>
                                            <td><?="% ".$linhaFatura->produto->iva->percentagem?></td>
                                            <td><?="€ ".$linhaFatura->valoriva * $linhaFatura->quantidade?></td>
                                            <td> <?="€ ".$linhaFatura->produto->preco*$linhaFatura->quantidade?></td>
                                        </tr>
                                    <?php }?>



                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row flex-row-reverse">

                            <!-- /.col -->

                            <div class="col-md-2" style="margin-right: 25px">

                                <div class="table-responsive">

                                    <table class="table">
                                        <tr>
                                            <th>Subtotal:</th>
                                            <td>
                                                <?= "€ ".$subtotal?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th> IVA:</th>
                                            <td><?= "€ ".$fatura->ivatotal?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td><?= "€ ".$fatura->valortotal?>
                                            </td>
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

                            </div>

                        </div>
                        <div class="col-12">
                            <a href="router.php?c=fatura&a=pdf&idFatura=<?=$fatura->id?>" rel="noopener" target="_blank" class="btn btn-default" style="margin-left:1450px"><i class="fas fa-print"></i> PDF</a>
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



