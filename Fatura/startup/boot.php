<?php
require_once '.\vendor\autoload.php';
use Carbon\Carbon;

define('APP_NAME', 'Fatura+'); //Constante
define('INVALID_ACCESS_ROUTE', 'c=login&a=index');

ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('./models');
    $cfg->set_connections(
        array(
            'development' => 'mysql://root@localhost/faturadb',
        )
    );
})
?>
