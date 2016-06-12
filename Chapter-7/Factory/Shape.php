<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/3/2015
 * Time: 9:47 PM
 */

abstract class Shape {
    // Any class that extends Shape needs to define a getArea() method
    abstract protected function getArea();
    // Any class that extends Shape needs to define a getPerimeter() method
    abstract protected function getPerimeter();
}