<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/26/2015
 * Time: 4:55 PM
 */

require('Rectangle.php');
class Square extends Rectangle{
    function __construct($side = 0){
        $this->width = $side;
        $this->height = $side;
    }
}