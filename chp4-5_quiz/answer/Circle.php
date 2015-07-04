<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/2/2015
 * Time: 3:26 PM
 */

/*
 * Class Circle
 * VARIABLES
 * -$radius = radius of a circle or half of diameter or a circle
 * -PI = constant variable used for math calculation (π)
 * -$counter = static variable which keep tracks of how many circles are created
 *
 * METHODS
 * -getArea()
 * -getCircumference()
 * */
class Circle {
    /**
     * @var int
     * Use for regular circle calculations
     */
    protected $radius = 0;
    /**
     * @var int
     * Use for oval calculations
     */
    protected $radius2 = 0;
    /**
     * @constant_variable int
     */
    const PI = 3.14159265359;
    /**
     * @var int
     */
    private static $_counter = 0;

    /**
     * @param int $radius
     * @param int $radius2 - for oval calculations no a must
     * Enters the radius of a circle
     * Also counter would increment if an object is created
     */
    function __construct($radius, $radius2 = 0){
        $this->radius = $radius;
        $this->radius2 = $radius2;
        self::$_counter++;
    }

    /**
     * @return float
     * Get area of a circle
     * Equation = PI*radius to the power of 2
     */
    function getArea(){
        return self::PI * (pow($this->radius, 2));
    }

    /**
     * @return int
     * Get circumference of a circle
     * Equation = 2PI * radius
     */
    function getCircumference(){
        return (2*(self::PI))*($this->radius);
    }

    /**
     * @return int
     */
    public function getRadius() {
        return $this->radius;
    }

    /**
     * @return int
     */
    public function getRadius2() {
        return $this->radius2;
    }

    /**
     * @return int
     * Returns the number of circles created
     */
    public static function getCounter(){
        return self::$_counter;
    }

    /**
     * Destructor
     * decrement an the count of a circle when object is destroyed
     */
    function __destruct(){
        self::$_counter--;
    }
}