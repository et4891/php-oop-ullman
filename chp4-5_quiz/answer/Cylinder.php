<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/2/2015
 * Time: 4:13 PM
 */

/**
 * Class Cylinder
 * VARIABLES
 * -$rectangle - store a new Rectangle object when cylinder is created
 * -$circle - store a new Circle object when a cylinder is created
 * METHODS
 * -getArea()
 */
class Cylinder {
    /**
     * @var object
     * Reference a rectangle object
     */
    protected $rectangle;
    /**
     * @var object
     * Reference a circle object
     */
    protected $circle;

    /**
     * @param int $radius
     * @param int $height
     */
    function __construct($radius, $height){
        $this->rectangle = new Rectangle(null, $height);
        $this->circle = new Circle($radius);
    }

    /**
     * @return int
     * Get area of a cylinder
     * Equation = (2PI * radius * height) + (2PI * radius to the power of 2)
     */
    function getArea(){
        $radius = $this->circle->getRadius();
        $height = $this->rectangle->getHeight();
        return (2*(Circle::PI)*($radius)*($height)) + (2*(Circle::PI)*(pow($radius,2)));
    }

    /**
     * @return int
     */
    public function getHeight(){
        return $this->rectangle->getHeight();
    }

    /**
     * @return int
     */
    public function getRadius(){
        return $this->circle->getRadius();
    }

    /**
     * @return object
     */
    public function getRectangle() {
        return $this->rectangle;
    }

    /**
     * @return object
     */
    public function getCircle() {
        return $this->circle;
    }

}