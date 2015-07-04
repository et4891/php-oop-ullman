<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/26/2015
 * Time: 4:49 PM
 */

include('Square.php');
$width = 21;
$height = 98;
$r = new Rectangle($width, $height);
echo '<p>The area of the rectangle is ' . $r->getArea() . '</p>';
echo '<p>The perimeter of the rectangle is ' . $r->getPerimeter() . '</p>';


$side = 60;
$s = new Square($side);
echo '<p>The area of the square is ' . $s->getArea() . '</p>';
echo '<p>The perimeter of the square is ' . $s->getPerimeter() . '</p>';

