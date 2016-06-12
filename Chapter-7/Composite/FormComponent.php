<?php

/**
 * Created by PhpStorm.
 * User: et-asus
 * Date: 11/06/16
 * Time: 2:41 AM
 */
abstract class FormComponent {
    abstract function add (FormComponent $obj);
    abstract function remove (FormComponent $obj);
    abstract function display ();
    abstract function validate ();
    abstract function showError ();
}

