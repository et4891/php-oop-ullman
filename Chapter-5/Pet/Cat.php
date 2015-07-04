<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/25/2015
 * Time: 4:46 PM
 */

require_once('Pet.php');

/**
 * Class Cat
 * This class has additional method: climb()
 */
class Cat extends Pet{
    /**
     * echo "cat's name" is climbing
     */
    function play(){
        parent::play();
        echo "<p>$this->name is climbing</p>";
    }
}