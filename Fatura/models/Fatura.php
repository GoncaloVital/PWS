<?php

class Fatura extends \ActiveRecord\Model
{

    static $has_many = array(
        array('linhafatura', 'conditions' => array('void = ?' => array(0)))
    );
    static $belongs_to = array(
        array('user')
    );

}