<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/25/2015
 * Time: 4:46 PM
 */

require_once('Pet.php');

/**
 * Class Dog
 * This class as additional method: fetch()
 */
class Dog extends Pet{
    /**
     *echo "dog's name" is fetching
     */
    function play(){
        parent::play();  //echo Satchel is playing
        echo "<p>$this->name is fetching. </p>";  //echo Satchel is fetching.
    }

    function getName(){
        return $this->name;
    }
}