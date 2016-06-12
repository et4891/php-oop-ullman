<?php

/**
 * Created by PhpStorm.
 * User: et-asus
 * Date: 02/06/16
 * Time: 5:12 PM
 */
class Factory {
    static function Create($type){
        // Validate $type
        return new SomeClassType();
    }
}