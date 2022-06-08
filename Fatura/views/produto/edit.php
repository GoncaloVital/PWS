<div class="col-sm-12 d-flex align-items-center justify-content-center">
    <form action="router.php?c=produto&a=update&id=<?=$produtos->id ?>" method="post">
        <h2 class="text-left top-space">Edit Book</h2>
        Referencia <input type="text" name="referencia" value="<?php if(isset($produtos)) { echo $produtos->referencia; }?>">
        <?php if(isset($produtos->errors)){ echo $produtos->errors->on('referencia'); }?><br><br>

        Descrição <input type="text" name="descricao" value="<?php if(isset($produtos)) { echo $produtos->descricao; }?>">
        <?php if(isset($produtos->errors)){ echo $produtos->errors->on('descricao'); }?><br><br>

        Preço: <input type="text" name="preco" value="<?php if(isset($produtos)) { echo $produtos->preco; }?>"> €
        <?php if(isset($produtos->errors)){ echo $produtos->errors->on('preco'); }?><br><br>

        Stock <input type="number" name="stock" min="1" value="<?php if(isset($produtos)) { echo $produtos->stock; }?>">
        <?php if(isset($produtos->errors)){ echo $produtos->errors->on('stock'); }?><br><br>

        <label for="ivas">IVA</label>
        <select name="iva_id">

            <?php foreach($ivas as $iva){?>
                <?php if($iva->id == $produtos->iva_id) { ?>
                    <option value="<?= $iva->id?>" selected><?= $iva->descricao;?> </option>
                <?php }
                else { ?>
                    <option value="<?= $iva->id?>"><?= $iva->descricao;?> </option>
                <?php }
            } ?>
        </select>
        <br><br>

        <input type="submit" value="Editar" class="btn btn-info">
        <a href="router.php?c=produto&a=index"><input type="button" value="Cancelar" class="btn btn-info"></a>
    </form>
</div>
