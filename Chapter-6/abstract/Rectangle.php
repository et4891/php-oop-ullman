<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/26/2015
 * Time: 4:46 PM
 */

class Rectangle extends Shape{
    protected $width = 0;
    protected $height = 0;

    function __construct($width = 0, $height = 0)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function setSize($width = 0, $height = 0){
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(){
        return ($this->width * $this->height);
    }

    public function getPerimeter(){
        return (($this->width + $this->height) * 2);
    }

    public function isSquare(){
        if($this->width == $this->height){
            return true;
        }
        return false;
    }
}