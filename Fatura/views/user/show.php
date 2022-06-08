<h2 class="text-left top-space">User Details</h2>


    <h3>Username:</h3> <?=$user->username?>
    <h3>Email:</h3> <?=$user->email?>
    <h3>Telefone:</h3> <?=$user->telefone?>
    <h3>NIF:</h3> <?=$user->nif?>
    <h3>Morada:</h3> <?=$user->morada?>
    <h3>Cod. Postal:</h3> <?=$user->codpostal?>
    <h3>Localidade:</h3> <?=$user->localidade?>
    <h3>Role:</h3> <?=$user->role->role?>

    <div class="col-sm-6">
        <p>
            <a href="router.php?c=user&a=index" class="btn btn-info"
               role="button">Voltar</a>
        </p>
    </div>
