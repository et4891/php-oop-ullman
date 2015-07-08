<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/26/2015
 * Time: 4:46 PM
 */

class TraitsTestClass {
    use tDebug;
    public $width = 0;
    public $height = 0;
    public $random;

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