<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/27/2015
 * Time: 2:41 PM
 */

require_once('Human.php');
class Female extends Human{
    protected $gender = 'female';

    function __construct($age, $heightCM, $weightKG){
        parent::__construct($age, $this->gender, $heightCM, $weightKG);
    }
}

$f = new Female(12,123,40);
echo "Your gender is ". $f->getGender()."<br>";
