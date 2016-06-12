<?php

/**
 * Created by PhpStorm.
 * User: et-asus
 * Date: 11/06/16
 * Time: 3:27 AM
 */
class Employee extends WorkUnit{

    /**
     * Empty function
     * @param Employee $e
     * @return bool
     */
    function add(Employee $e) {
        return false;
    }

    /**
     * Empty function
     * @param Employee $e
     * @return bool
     */
    function remove(Employee $e) {
        return false;
    }

    /**
     * @param $task
     */
    function assignTask($task) {
        $this->tasks[] = $task;
        echo "<p>A new task has been assigned to <strong>{$this->getName()}</strong>.  It will be done by <strong>{$this->getName()}</strong> alone.</p>";
    }

    /**
     * @param $task
     */
    function completeTask($task) {
        $index = array_search($task, $this->tasks);
        unset($this->tasks[$index]);
        echo "<p>The <strong>'$task'</strong> task has been completed by employee <strong>{$this->getName()}</strong>.</p>";
    }
}