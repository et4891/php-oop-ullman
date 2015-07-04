<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/26/2015
 * Time: 5:34 PM
 */
include('Dog.php');
include('Cat.php');
echo Pet::getCount() . "<-Total Pet object<br>";  // 0
$dog = new Dog('Satchel');
echo Pet::getCount() . "<-Total Pet object<br>";  // 1
$cat = new Cat('Bucky');
echo Pet::getCount() . "<-Total Pet object<br>";  // 2

$dog->eat();
$cat->eat();
$dog->sleep();
$cat->sleep();
$dog->play();
$cat->play();

echo "Unset dog object<br>";
unset($dog);
echo Pet::getCount() . " Pet instance left<br>";  // 1
echo "Unset cat instance<br>";
unset($cat);
echo Pet::getCount() . " Pet instance left<br>";  // 0


//unset($dog, $cat);