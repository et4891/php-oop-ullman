<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/27/2015
 * Time: 5:11 PM
 */

require_once('ParentVisibility.php');
class ChildVisibility extends  ParentVisibility{
    function printVar($var){
        echo "<p>In ChildVisibility, \$$var: '{$this->$var}'.</p>";
    }
}