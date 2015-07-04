<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/27/2015
 * Time: 5:09 PM
 */

class ParentVisibility {
    public $public = 'public';
    protected $protected = 'protected';
    private $_private = 'private';

    function printVar($var){
        echo "<p>In ParentVisibility, \$$var: '{$this->$var}'.</p>";
    }
}