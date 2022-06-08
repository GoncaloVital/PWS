<?php

class Empresa extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('designacaosocial'), // msg por omissao, cant be blank
        array('email'),
        array('telefone'),
        array('nif'),
        array('morada'),
        array('codpostal'),
        array('localidade'),
        array('capitalsocial'),
    );


}
