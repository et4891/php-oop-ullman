<?php
//if possible use autoload function here

$s = new Sphere(23);
$o = new Oval(23,11);
$c = new Cylinder(22,7);
$circle = new Circle(12);


//Fix the following code so when loaded on website it'll look something like this
/*Radius of the circle is: 12
Circumference of the Circle: 75.39822368616
Area of the Circle: 452.38934211696
-------------------------------------------
Height of the Cylinder: 7
Radius of the Cylinder: 22
Area of the Cylinder: 4008.6722259808
-------------------------------------------
Area of the Oval: 794.82294135827
Length of Semi-Major Axis of the Oval: 23
Length of Semi-Minor Axis of the Oval: 11
-------------------------------------------
Area of the Sphere: 6647.6100549964
-------------------------------------------
Total Circle related created: 4
Circles left: (this will depend on how many objects you destroyed)*/

echo '<p>Radius of the circle is: </p>';
echo '<p>Circumference of the Circle: </p>';
echo '<p>Area of the Circle: </p>';
echo '-------------------------------------------';
echo '<p>Height of the Cylinder: </p>';
echo '<p>Radius of the Cylinder: </p>';
echo '<p>Area of the Cylinder: </p>';
echo '-------------------------------------------';
echo '<p>Area of the Oval: </p>';
echo '<p>Length of Semi-Major Axis of the Oval: </p>';
echo '<p>Length of Semi-Minor Axis of the Oval: </p>';
echo '-------------------------------------------';
echo '<p>Area of the Sphere: </p>';
echo '-------------------------------------------';
echo '<p>Total Circle related created: </p>';
//Destroy one or more objects here
echo '<p>Circles left: </p>';