<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/25/2015
 * Time: 4:30 PM
 */


/* Class Pet
 * The class contains one attribute: name
 * The class contains three methods:
 * - __construct()
 * - eat()
 * - sleep()
 * - play()
 */
class Pet {
    /**
     * @var name - Name of the Pet
     */
    public $name;
    /**
     * @var int - Counts how many Pet objects are created including inherited objects
     */
    private static $_count = 0;

    /**
     * @param $pet_name assign the name of the Pet to name variable
     */
    function __construct($pet_name){
        $this->name = $pet_name;
        self::sleep();
        self::$_count++;
    }

    /**
     *  Destructor decrements the counter
     */
    function __destruct(){
        self::$_count--;
    }

    /**
     * @return int Static method for returning the count
     * Public and static means it's available to be called anywhere and returns the value of $_count;
     */
    public static function getCount(){
        return self::$_count;
    }

    /**
     * echo "pet's name" is eating
     */
    function eat(){
        echo  "<p>$this->name is eating.</p>";
    }

    /**
     * echo "pet's name" is sleeping
     */
    function sleep(){
        echo "<p>$this->name is sleeping.</p>";
    }


    /**
     *echo "pet's name" is playing
     */
    function play(){
        echo "<p>$this->name is playing</p>";
    }
}