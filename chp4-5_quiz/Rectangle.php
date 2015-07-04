<?php
class Rectangle {
    protected $width = 0;
    protected $height = 0;

    function __construct($width = 0, $height = 0)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function getArea(){
        return ($this->width * $this->height);
    }

    function getPerimeter(){
        return (($this->width + $this->height) * 2);
    }
}