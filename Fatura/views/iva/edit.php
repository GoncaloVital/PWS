<div class="col-sm-12 d-flex align-items-center justify-content-center">
    <form action="router.php?c=iva&a=update&id=<?=$iva->id ?>" method="post">
        <h2 class="text-left top-space">Edit IVA</h2>
        Percentagem: <input type="text" name="percentagem" value="<?= $iva->percentagem ?>">
        <?php if(isset($iva->errors)){ echo $iva->errors->on('percentagem'); }?><br><br>

        Descricao: <input type="text" name="descricao" value="<?= $iva->descricao ?>">
        <?php if(isset($iva->errors)){ echo $iva->errors->on('descricao'); }?><br><br>

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

        <input type="submit" value="Editar" class="btn btn-info">
        <a href="router.php?c=iva&a=index"><input type="button" value="Cancelar" class="btn btn-info"></a>
    </form>
</div>
