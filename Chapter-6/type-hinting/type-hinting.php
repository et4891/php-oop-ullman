<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/5/2015
 * Time: 3:58 PM
 */

function __autoload($class){
    include_once( $class . '.php');
}

$hr = new Department('Human Resources');

$e1 = new Employee('Jane Doe');
$e2 = new Employee('John Doe');

$hr->addEmployee($e1);
$hr->addEmployee($e2);

var_dump($hr->getEmployees());

unset($hr, $e1, $e2);