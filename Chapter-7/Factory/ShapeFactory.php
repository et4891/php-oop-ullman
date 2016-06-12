<?php

/**
 * Created by PhpStorm.
 * User: et-asus
 * Date: 02/06/16
 * Time: 7:05 PM
 */

// The class will be abstract because this class will not be created as an instance / object
// This is tested with factory.php
abstract class ShapeFactory {
    //Start defining the static method

    /**
     * Static method that creates objects
     * @param $type             type of shape to create
     * @param array $size       array of sizes for example a rectangle would contain two values
     * @return object of Rectangle|Triangle
     */
    static function Create($type, array $size){
        // Determine the object type based upon the parameters
        switch ($type){
            case 'rectangle':
                return new Rectangle($size[0], $size[1]);
                break;
            case 'triangle':
                return new Triangle($size[0], $size[1], $size[2]);
                break;
            default:
                echo 'invalid entry';
                die;
        }
    }// end Create()

} // end ShapeFactory class