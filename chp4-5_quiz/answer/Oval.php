<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/2/2015
 * Time: 4:38 PM
 */

require_once('Circle.php');

/**
 * Class Oval
 * METHOD
 * -getArea()
 */
class Oval extends Circle{
    /**
     * @return float
     * Get area of an oval
     * Equation = PI * radius1 * radius2
     */
    function getArea(){
        return Circle::PI * $this->radius * $this->radius2;
    }
}