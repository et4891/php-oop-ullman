<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/27/2015
 * Time: 12:55 AM
 */
class Human {
    protected $age = 0;

    /*  Physical Parts */
    protected $gender;

    protected $height_in_cm;
    protected $weight_in_kg;

    // Head Section
    protected $head = 1;
    protected $ears = 2;
    protected $eyes = 2;
    protected $nose = 1;
    protected $mouth = 1;

    // Arm Section
    protected $arms = 2;
    protected $shoulder = 2;

    protected $wrist = 2;
    protected $hands = 2;

    protected $left_fingers = 5;
    protected $left_thumb_finger = true;
    protected $left_index_finger = true;
    protected $left_middle_finger = true;
    protected $left_ring_finger = true;
    protected $left_pinky_finger = true;

    protected $right_fingers = 5;
    protected $right_thumb_finger = true;
    protected $right_index_finger = true;
    protected $right_middle_finger = true;
    protected $right_ring_finger = true;
    protected $right_pinky_finger = true;

    // Leg Section
    protected $hip = 2;
    protected $thigh = 2;

    protected $ankle = 2;
    protected $foot = 2;

    protected $left_toes = 5;
    protected $left_big_toe = true;
    protected $left_long_toe = true;
    protected $left_middle_toe = true;
    protected $left_ring_toe = true;
    protected $left_pinky_toe =true;

    protected $right_toes = 5;
    protected $right_big_toe = true;
    protected $right_long_toe = true;
    protected $right_middle_toe = true;
    protected $right_ring_toe = true;
    protected $right_pinky_toe =true;

    //Inner Section of a human
    protected $bones = 270;
    protected $soul = true;
    protected $spirit = true;

    function __construct($age, $gender, $heightCM, $weightKG)
    {
        $this->age = $age;
        $this->gender = $gender;
        $this->height_in_cm = $heightCM;
        $this->weight_in_kg = $weightKG;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
}