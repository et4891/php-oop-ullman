<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/3/2015
 * Time: 11:03 PM
 */

class Circle extends Shape{
    private $radius;

    function __construct($radius){
        $this->radius = $radius;
    }

    public function getArea() {
        return 3.14 * pow($this->radius,2);
    }

    public function getPerimeter() {
        return 2 * 3.14 * $this->radius;
    }
}