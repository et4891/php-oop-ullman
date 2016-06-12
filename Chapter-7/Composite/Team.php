<?php

/**
 * Created by PhpStorm.
 * User: et-asus
 * Date: 11/06/16
 * Time: 3:18 AM
 *
 * Team class inherits the constructor, getName() and the two protected attributes.
 */
class Team extends WorkUnit{
    private $_employees = array();      // store team members

    /**
     * Used to add composite members to the class
     * Uses type hinting to expect an Employee obj which is then added to the internal array
     * @param Employee $e
     */
    function add(Employee $e) {
        $this->_employees[] = $e;
        echo "<p><strong>{$e->getName()}</strong> has been added to the team <strong>{$this->getName()}</strong>.</p>";
    }

    /**
     * Removing team members from the composite obj
     * Index must be found first before employee can be removed
     * @param Employee $e
     */
    function remove(Employee $e) {
        $index = array_search($e, $this->_employees);
        unset($this->_employees[$index]);
        echo "<p><strong>{$e->getName()}</strong> has been removed from team <strong>{$this->getName()}</strong>.</p>";
    }

    /**
     * New job is added to the ongoing list of responsibilities for the team
     * @param $task
     */
    function assignTask($task) {
        $this->tasks[] = $task;
        echo "<p>A new task has been assigned to team <strong>{$this->getName()}</strong>.  It should be easy to do with <strong>{$this->getCount()}</strong> team members(s).</p>";
    }

    /**
     * Similar to remove() but this removes the completed tasks
     * @param $task
     */
    function completeTask($task) {
        $index = array_search($task, $this->tasks);
        unset($this->tasks[$index]);
        echo "<p>The <strong>'$task'</strong> task has been completed by team <strong>{$this->getName()}</strong>.</p>";
    }

    /**
     * Return the number of team members
     * @return int
     */
    function getCount(){
        return count($this->_employees);
    }
}