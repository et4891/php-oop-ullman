<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/3/2015
 * Time: 10:39 PM
 */

function __autoload($class) {
    require_once($class . '.php');
}

$side1 = 5;
$side2 = 10;
$side3 = 13;

echo "<h2>With sides of $side1, $side2, and $side3....</h2>";

$t = new Triangle($side1, $side2, $side3);
echo '<p>The area of the triangle is ' . $t->getArea() . '</p>';
echo '<p>The perimeter of the triangle is ' . $t->getPerimeter() . '</p>';
