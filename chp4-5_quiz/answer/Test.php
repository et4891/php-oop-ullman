<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/2/2015
 * Time: 3:34 PM
 */

function __autoload ($class) {
    include_once($class . '.php');
}

$s = new Sphere(23);
$o = new Oval(23,11);
$c = new Cylinder(22,7);
$circle = new Circle(12);

echo '<p>Radius of the circle is: '.$circle->getRadius() .'</p>';
echo '<p>Circumference of the Circle: ' . $circle->getCircumference() . '</p>';
echo '<p>Area of the Circle: ' . $circle->getArea() . '</p>';
echo '-------------------------------------------';
echo '<p>Height of the Cylinder: ' . $c->getHeight() . '</p>';
echo '<p>Radius of the Cylinder: ' . $c->getRadius() . '</p>';
echo '<p>Area of the Cylinder: ' . $c->getArea() . '</p>';
echo '-------------------------------------------';
echo '<p>Area of the Oval: ' . $o->getArea() . '</p>';
echo '<p>Length of Semi-Major Axis of the Oval: ' . $o->getRadius() . '</p>';
echo '<p>Length of Semi-Minor Axis of the Oval: ' . $o->getRadius2() . '</p>';
echo '-------------------------------------------';
echo '<p>Area of the Sphere: ' . $s->getArea() . '</p>';
echo '-------------------------------------------';
echo '<p>Total Circle related created: ' . Circle::getCounter() . '</p>';
unset($c,$s,$circle);
echo '<p>Circles left: ' . Circle::getCounter() .  '</p>';