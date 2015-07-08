<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/4/2015
 * Time: 6:30 PM
 */

class CloneTest{
    public $var = 0;
}

$a = new CloneTest();
$a->var = 1;
echo $a->var;  // 1
$b = clone $a; //This will separate the objects
echo $b->var;  // 1
$b->var = 2;
echo $a->var;  // 1
echo $b->var;  // 2