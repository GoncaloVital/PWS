<?php

class Vigor extends \ActiveRecord\Model
{
    static $has_many = array(
        array('iva')
    );
}