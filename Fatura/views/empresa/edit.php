
<div class="col-sm-12 d-flex align-items-center justify-content-center">
    <form action="router.php?c=empresa&a=update&id=<?= $empresas-> id?>" method="post">
        <h2 class="text-left top-space">Edit Chapter</h2>

        Designacao Social <input type="text" name="designacaosocial" value="<?php if(isset($empresas)) { echo $empresas->designacaosocial; }?>">
        <?php if(isset($empresas->errors)){ echo $empresas->errors->on('designacaosocial'); }?><br><br>

        Email <input type="text" name="email" value="<?php if(isset($empresas)) { echo $empresas->email; }?>">
        <?php if(isset($empresas->errors)){ echo $empresas->errors->on('email'); }?><br><br>

        Telefone <input type="text" name="telefone" value="<?php if(isset($empresas)) { echo $empresas->telefone; }?>">
        <?php if(isset($empresas->errors)){ echo $empresas->errors->on('telefone'); }?><br><br>

        NIF <input type="text" name="nif" value="<?php if(isset($empresas)) { echo $empresas->nif; }?>">
        <?php if(isset($empresas->errors)){ echo $empresas->errors->on('nif'); }?><br><br>

        Morada <input type="text" name="morada" value="<?php if(isset($empresas)) { echo $empresas->morada; }?>">
        <?php if(isset($empresas->errors)){ echo $empresas->errors->on('morada'); }?><br><br>

        Cod. Postal <input type="text" name="codpostal" value="<?php if(isset($empresas)) { echo $empresas->codpostal; }?>">
        <?php if(isset($empresas->errors)){ echo $empresas->errors->on('codpostal'); }?><br><br>

        Localidade <input type="text" name="localidade" value="<?php if(isset($empresas)) { echo $empresas->localidade; }?>">
        <?php if(isset($empresas->errors)){ echo $empresas->errors->on('localidade'); }?><br><br>

        Capital Social <input type="text" name="capitalsocial" value="<?php if(isset($empresas)) { echo $empresas->capitalsocial; }?>">
        <?php if(isset($empresas->errors)){ echo $empresas->errors->on('capitalsocial'); }?><br><br>

        <input type="submit" value="Editar" class="btn btn-info">
        <a href="router.php?c=empresa&a=index"><input type="button" value="Cancelar" class="btn btn-info"></a>
    </form>
</div>
