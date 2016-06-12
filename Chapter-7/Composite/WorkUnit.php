<?php

/**
 * Created by PhpStorm.
 * User: et-asus
 * Date: 11/06/16
 * Time: 3:13 AM
 */
abstract class WorkUnit {
    protected $tasks    = array();  // stores the jobs to be done
    protected $name     = NULL;     // stores the employee or team name
    
    // assigns the name
    function __construct($name) {
        $this->name = $name;
    }
    
    // method to return the name
    function getName() {
        return $this->name;
    }
    
    // Abstract functions to be implemented
    abstract function add(Employee $e);         //required by composite for adding composite pieces
    abstract function remove(Employee $e);      //required by composite for removing composite pieces
    abstract function assignTask($task);
    abstract function completeTask($task);
}