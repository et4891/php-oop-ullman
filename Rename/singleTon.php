<?php

/**
 * Created by PhpStorm.
 * User: et-asus
 * Date: 02/06/16
 * Time: 4:59 PM
 */
class singleTon {
    static private $_instance = null;
    static function getInstance(){
        if (self::$_instance == null){
            self::$_instance = new singleTon();
        }
        return self::$_instance;
    }
}