<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/2/2015
 * Time: 3:41 PM
 */

require_once('Circle.php');

/**
 * Class Sphere
 * METHOD
 * -getArea()
 */
class Sphere extends Circle{
    /**
     * @return int
     * Get area of a sphere
     * Equation = 4PI * radius to the power of 2
     */
    function getArea(){
        return (4 * Circle::PI) * (pow($this->radius,2));
    }
}