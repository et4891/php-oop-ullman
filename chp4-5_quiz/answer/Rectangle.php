<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/26/2015
 * Time: 4:46 PM
 */


/*
 * Rectangle Class
 * VARIABLES
 * -$width = width of a rectangle
 * -$height = height of a rectangle
 * */
class Rectangle {
    /**
     * @var int
     */
    protected $width = 0;
    /**
     * @var int
     */
    protected $height = 0;

    /**
     * @param int $width
     * @param int $height
     */
    function __construct($width = 0, $height = 0)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     * Get area of a Rectangle
     * Equation = width * height
     */
    function getArea(){
        return ($this->width * $this->height);
    }

    /**
     * @return int
     * Get perimeter of a Rectangle
     * Equation (width + height) * 2
     */
    function getPerimeter(){
        return (($this->width + $this->height) * 2);
    }

    /**
     * @return int
     * Gets the value in height variable
     */
    public function getHeight() {
        return $this->height;
    }

}