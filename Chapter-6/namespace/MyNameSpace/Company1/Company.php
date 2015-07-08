<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/6/2015
 * Time: 1:34 AM
 */

namespace MyNamespace\Company1;

class Department {
    private $name;
    private $employees;

    /**
     * @param $name
     * Name of the department and an empty array for employees when department is created
     */
    function __construct($name) {
        $this->name = $name;
        $this->employees = array();
    }

    /**
     * @param Employee $e
     * Type hinting is used in this script to restrict the method to only accepting arguments of type Employee
     * Inserts the new Employee name into the employees array
     * Since $e will be an object of type Employee, it can invoke any of Employee methods such as getName()
     */
    function addEmployee(Employee $e){
        $this->employees[] = $e;
        echo "<p>{$e->getname()} has been added to the {$this->name} department.</p>";
    }

    /**
     * @return mixed
     */
    public function getEmployees() {
        return $this->employees;
    }

} // End Department Class

class Employee {
    private $name;

    function __construct($name) {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }
} // End Employee