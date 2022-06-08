<h2 class="text-left top-space">Product Details</h2>

    <h3>Referencia:</h3> <?=$produtos->referencia?>
    <h3>Descrição:</h3> <?=$produtos->descricao?>
    <h3>Preço:</h3> <?=$produtos->preco?>
    <h3>Stock:</h3> <?=$produtos->stock?>
    <h3>Iva</h3><?=$produtos->iva->descricao?> <?=$produtos->iva->percentagem.'%'?>


    <div class="col-sm-6">
        <p>
            <a href="router.php?c=produto&a=index" class="btn btn-info"
               role="button">Voltar</a>
        </p>
    </div>
