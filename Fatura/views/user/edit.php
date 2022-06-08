<div class="col-sm-12 d-flex align-items-center justify-content-center">
    <form action="router.php?c=user&a=update&id=<?=$users->id ?>" method="post">
        <h2 class="text-left top-space">Edit Book</h2>
        Username <input type="text" name="username" value="<?php if(isset($users)) { echo $users->username; }?>">
        <?php if(isset($users->errors)){ echo $users->errors->on('username'); }?><br><br>

        Password <input type="password" name="password" value="<?php if(isset($users)) { echo $users->password; }?>">
        <?php if(isset($users->errors)){ echo $users->errors->on('password'); }?><br><br>

        Email <input type="text" name="email" value="<?php if(isset($users)) { echo $users->email; }?>">
        <?php if(isset($users->errors)){ echo $users->errors->on('email'); }?><br><br>

        Telefone <input type="text" name="telefone" maxlength="9" value="<?php if(isset($users)) { echo $users->telefone; }?>">
        <?php if(isset($users->errors)){ echo $users->errors->on('telefone'); }?><br><br>

        NIF <input type="text" name="nif" maxlength="9" value="<?php if(isset($users)) { echo $users->nif; }?>">
        <?php if(isset($users->errors)){ echo $users->errors->on('nif'); }?><br><br>

        Morada <input type="text" name="morada" value="<?php if(isset($users)) { echo $users->morada; }?>">
        <?php if(isset($users->errors)){ echo $users->errors->on('morada'); }?><br><br>

        Cod. Postal <input type="text" name="codpostal" maxlength="9" value="<?php if(isset($users)) { echo $users->codpostal; }?>">
        <?php if(isset($users->errors)){ echo $users->errors->on('codpostal'); }?><br><br>

        Localidade <input type="text" name="localidade" value="<?php if(isset($users)) { echo $users->localidade; }?>">
        <br><br>
        <label for="roles">Role</label>
        <select name="role_id">

            <?php foreach($roles as $role){?>
                <?php if($role->id == $users->role_id) { ?>
                    <option value="<?= $role->id?>" selected><?= $role->role;?> </option>
                <?php }
                else { ?>
                    <option value="<?= $role->id?>"><?= $role->role;?> </option>
                <?php }
            } ?>
        </select>
        <br><br>

        <input type="submit" value="Editar" class="btn btn-info">
        <a href="router.php?c=user&a=index"><input type="button" value="Cancelar" class="btn btn-info"></a>
    </form>
</div>
