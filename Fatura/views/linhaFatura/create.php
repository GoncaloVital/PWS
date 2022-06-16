
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Fatura</h1>
                    <?php if($error == 1){?>

                        <div class="alert alert-danger d-flex align-items-center col-5 " role="alert">
                            <svg class="col-md-3"  height="20" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/> </svg>
                            <div>
                                Introduza produtos na fatura
                            </div>
                        </div>
                    <?php }?>
                </div><!-- /.col -->


            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" >

        <div class="container-fluid" >

            <div class="row" >


                </div>
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
                                        <th >REF</th>
                                        <th class="col-md-4">Descrição</th>
                                        <th class="col-md-1">QTD</th>
                                        <th class="col-md-1">Preço(UN)</th>
                                        <th class="col-md-1">Taxa</th>
                                        <th class="col-md-1">IVA</th>
                                        <th class="col-md-1">SubTotal</th>
                                        <th >Editar</th>
                                        <th >Remover</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    <?php foreach ($fatura->linhafaturas as $linhaFatura) { ?>
                                        <tr>
                                            <td><?=$linhaFatura->produto->referencia?></td>
                                            <td><?=$linhaFatura->produto->descricao?></td>
                                            <td><?=$linhaFatura->quantidade?></td>
                                            <td><?=$linhaFatura->valorunitario."€"?></td>
                                            <td><?=$linhaFatura->produto->iva->percentagem. "%"?></td>
                                            <td><?=$linhaFatura->valoriva * $linhaFatura->quantidade. "€"?></td>
                                            <td> <?=$linhaFatura->produto->preco*$linhaFatura->quantidade. "€"?></td>
                                            <td>
                                                <a href="router.php?c=linhaFatura&a=edit&idLinhaFatura=<?= $linhaFatura->id?>&idFatura=<?=$fatura->id?>&idProduto=<?=$linhaFatura->produto->id?>" class="btn btn-primary"><i class="nav-icon fa-solid fa-pen-to-square"></i>  </a>
                                            </td>
                                            <td>
                                                <a href="router.php?c=linhaFatura&a=delete&idLinhaFatura=<?= $linhaFatura->id?>&idFatura=<?=$fatura->id?>" class="btn btn-primary"  style="background-color: red; border-color: red"><i class="fa-solid fa-trash-can"></i> </a>
                                            </td>
                                        </tr>
                                    <?php }?>




                                    <?php  if (is_null($idProduto))
                                    {?>

                                        <tr>
                                            <td>
                                                <a href="router.php?c=produto&a=select&id=<?= $fatura->id?>" class="btn btn-primary" >Escolher Produto</a>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                <!-- verificacao do numero de stock, o valor maximo é o valor do stock do produto -->
                                                <input type="number" class="form-control" placeholder="QTD" name="" min="1" value="1" style="width: 100px; margin-left: -10px" readonly>
                                            </td>
                                            <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                                        </tr>
                                    <?php }else
                                    { ?>
                                         <form action="router.php?c=linhaFatura&a=store&idFatura=<?= $fatura->id?>&idProduto=<?= $produto->id?>" method="post">
                                        <tr>
                                            <td>
                                                <?=$produto->referencia?><br>
                                            </td>
                                            <td>
                                                <?=$produto->descricao?><br>
                                            </td>
                                            <td>
                                                <!-- verificacao do numero de stock, o valor maximo é o valor do stock do produto -->
                                                <input type="number" class="form-control" placeholder="QTD" name="quantidade" min="1" max="<?= $maxQTD ?>" value="1" style="width: 100px">
                                            </td>
                                            <td>
                                                <input type="hidden" class="form-control" name="valorunitario" value=" <?=$produto->preco?>">
                                                <?=$produto->preco."€"?><br>
                                            </td>
                                            <td>
                                                <input type="hidden" class="form-control" name="valoriva" value=" <?=$produto->preco*($produto->iva->percentagem/100)?>">
                                                <?=$produto->preco*($produto->iva->percentagem/100)?><br>
                                            </td>
                                            <td>
                                                <?=$produto->iva->percentagem?><br>
                                            </td>
                                            <td>
                                                <?=$produto->preco+($produto->iva->percentagem/100)?><br>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-primary" style="background-color: green"><i class="nav-icon fa-solid fa-check" ></i></button>
                                            </td>
                                            <td>
                                                <a href="router.php?c=linhaFatura&a=create&id=<?= $fatura->id?>" class="btn btn-primary" style="background-color: red"><i class="nav-icon fa-solid fa-x"></i></a>

                                            </td>

                                        </tr>
                                    </form>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row flex-row-reverse">

                            <!-- /.col -->

                            <div class="col-md-2" style="margin-right: 180px">

                                <div class="table-responsive">

                                    <table class="table">
                                        <tr>
                                            <th>Subtotal:</th>
                                            <td>
                                                <?= $subtotal . "€"?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>IVA:</th>
                                            <td><?= $fatura->ivatotal . "€"?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td><?= $fatura->valortotal . "€"?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="router.php?c=fatura&a=update&idFatura=<?= $fatura->id?>" class="btn btn-primary float-right">Emitir</a>
                                            </td>
                                            <td>
                                                <a href="router.php?c=fatura&a=delete&idFatura=<?= $fatura->id?>" class="btn btn-primary float-right">Anular</a>
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
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->





