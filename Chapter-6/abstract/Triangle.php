<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/3/2015
 * Time: 10:13 PM
 */

class Triangle extends Shape{
    private $sides = array();
    private $perimeter = NULL;

    function __construct($s0 = 0, $s1 = 0, $s2 = 0){
        //Stores the values in the array
        $this->sides[] = $s0;
        $this->sides[] = $s1;
        $this->sides[] = $s2;

        // Calculate the perimeter
        $this->perimeter = array_sum($this->sides);
    }

    public function getArea() {
        $p = $this->perimeter/2;
        return SQRT($p*($p - $this->sides[0])*
        ($p - $this->sides[1])*($p - $this->sides[2]));
    }

    public function getPerimeter() {
        return $this->perimeter;
    }
}