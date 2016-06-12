<?php

/**
 * Created by PhpStorm.
 * User: et-asus
 * Date: 11/06/16
 * Time: 3:03 AM
 */
class Form extends FormComponent{
    private $_elements = array();
    function add(FormComponent $obj) {
        $this->_elements[] = $obj;
    }
    function display() {
        // Display the entire form
    }
}

class FormElement extends FormComponent{
    function add(FormComponent $obj){
        return $obj; // Or false.
    }
    function display() {
        // Display the element
    }
}

$form = new Form();
$email = new FormElement();
$form->add($email);