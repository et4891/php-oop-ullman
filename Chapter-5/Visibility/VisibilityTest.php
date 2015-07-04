<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/27/2015
 * Time: 5:13 PM
 */

include_once('ChildVisibility.php');
/* Creating two object, one for parent and one for child */
$parent = new ParentVisibility();
$child = new ChildVisibility();

/* Testing Public Access */
echo '<h1>Public</h1>';
echo '<h2>Initially...</h2>';
$parent->printVar('public');  //Prints -> In ParentVisibility, $public: 'public'.
$child->printVar('public');   //Prints -> In ChildVisibility, $public: 'public'.

/* Modify public variable using the parent object */
echo '<h2>Modifying $parent->public...</h2>';
$parent->public = 'modified';
$parent->printVar('public');  //Prints -> In ParentVisibility, $public: 'modified'.
$child->printVar('public');   //Prints -> In ChildVisibility, $public: 'public'.

/* Testing Protected Access */
echo '<h1>Protected</h1>';
echo '<h2>Initially...</h2>';
$parent->printVar('protected');  //Prints -> In ParentVisibility, $protected: 'protected'.
$child->printVar('protected');   //Prints -> In ChildVisibility, $protected: 'protected'.

/* Modify protected variable using the parent object */
echo '<h2>Modifying $parent->protected...</h2>';
$parent->protected = 'modified';  //This is where error happens.  The variable is protected, only can be accessed by the class but not modify.
$parent->printVar('protected');
$child->printVar('protected');

/* Testing Private Access */
echo '<h1>Private</h1>';
echo '<h2>Initially...</h2>';
$parent->printVar('_private');  //Prints -> In ParentVisibility, $_private: 'private'.
$child->printVar('_private');   // This is where error happens.  The variable is private, as the child class doesn't contain the _private attribute because it neither inherited one nor defined one itself.

/* Modify _private variable using the parent object */
echo '<h2>Modifying $parent->_private...</h2>';
$parent->_private = 'modified';  //This is where error happens.  The variable is private, only can be accessed by the class but not modify.
$parent->printVar('_private');
$child->printVar('_private');