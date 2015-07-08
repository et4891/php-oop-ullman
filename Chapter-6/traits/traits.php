<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/4/2015
 * Time: 8:24 PM
 */
require_once('tDebug.php');
require_once('TraitsTestClass.php');
$t = new TraitsTestClass(2,3);
$t->dumbObject();
unset($t);