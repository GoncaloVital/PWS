<?php

class Iva extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('percentagem', 'message' => 'It must be provided'), // msg de validacao
        array('descricao') // msg por omissao, cant be blank
    );
    static $belongs_to = array(
        array('vigor')
    );

    static $has_many = array(
        array('produto')
    );

}