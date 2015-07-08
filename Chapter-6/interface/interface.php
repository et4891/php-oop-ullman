<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/4/2015
 * Time: 2:44 PM
 */

include_once('User.php');
$user = array('username' => 'trout');
$user2 = array('username' => 'troutefaefasefsaef');

echo "<h2>Creating a New User</h2>";

$me = new User($user);

$info = $me->read();
echo "<p>The user ID is {$info['userID']}.</p>";
echo "<p>The userName is {$info['username']}.</p>";
echo "--------------------------------------------";
$me->update(array('username' => 'troutster'));
$info = $me->read();
echo "<p>The user ID is still {$info['userID']}.</p>";
echo "<p>The userName is now {$info['username']}.</p>";

$me->delete();
var_dump($me);
$me->create($user2);
var_dump($me);
unset($me);