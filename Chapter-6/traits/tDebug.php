<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/4/2015
 * Time: 8:14 PM
 */

trait tDebug{
    public function dumbObject(){
        //Gets the name of the class
        $class = get_class($this);

        //Gets the object's given attributes in an array
        $attributes = get_object_vars($this);

        //Retrieves the methods defined in the associated class in an array
        $methods = get_class_methods($this);

        echo "<h2>Information about the $class object</h2>";
        var_dump($class);

        echo '--------------------------------';
        echo '<h3>Attributes</h3><ul>';
        foreach ($attributes as $k => $v) {
            echo "<li>$k: $v</li>";
        }
        echo '</ul>';
        var_dump($attributes);

        echo '--------------------------------';
        echo '<h3>Methods</h3><ul>';
        foreach ($methods as $v) {
            echo "<li>$v</li>";
        }
        echo '</ul>';
        var_dump($methods);
    }
}