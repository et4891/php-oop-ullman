<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/5/2015
 * Time: 3:58 PM
 */

/**
 * Use Company1 namespace
 */
//Company1.php has both Department and Employee class in one file
require_once('MyNamespace/Company1/Company.php');

$hr = new \MyNamespace\Company1\Department('Human Resource');

$e1 = new \MyNamespace\Company1\Employee('Holden Caulfield');
$e2 = new \MyNamespace\Company1\Employee('Jan Gallagher');

$hr->addEmployee($e1);
$hr->addEmployee($e2);

var_dump($hr->getEmployees());

unset($hr, $e1, $e2);

///**
// * ALTERNATIVE - Use Company1 namespace
// */
//require('MyNamespace/Company1/Company.php');
//use MyNamespace\Company1\Department;
//use MyNamespace\Company1\Employee;
//
//$hr = new Department('Human Resource');
//
//$e1 = new Employee('Holden Caulfield');
//$e2 = new Employee('Jan Gallagher');
//
//$hr->addEmployee($e1);
//$hr->addEmployee($e2);
//
//var_dump($hr->getEmployees());
//
//unset($hr, $e1, $e2);





/**
 * Use Company2 namespace
 */
//require('MyNamespace/Company2/Department.php');
//require('MyNamespace/Company2/Employee.php');

//For the above two requires, we can also use autoload which will find the classes needed
function __autoload($class){
    require($class . '.php');
}

use MyNamespace\Company2\Department;
use MyNamespace\Company2\Employee;

$hr = new Department('Accounting');

$e1 = new Employee('Holden Caulfield');
$e2 = new Employee('Jan Gallagher');

$hr->addEmployee($e1);
$hr->addEmployee($e2);

var_dump($hr->getEmployees());

unset($hr, $e1, $e2);