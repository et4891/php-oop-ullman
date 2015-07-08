<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/5/2015
 * Time: 4:53 PM
 */

namespace MyNamespace\Company2;

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
} // End Employee Class