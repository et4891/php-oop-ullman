<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/4/2015
 * Time: 2:37 PM
 */

require_once('iCrud.php');
/**
 * Class User implements iCrud
 * VARIABLES
 * -$userID         - generates random unique userID
 * -$username       - inserts name of user
 * METHODS
 * -__construct($data)
 * -create($data)       -from iCrud interface
 * -read()              -from iCrud interface
 * -update($data)       -from iCrud interface
 * -delete()            -from iCrud interface
 */
class User implements iCrud{

    /**
     * @var null|string
     */
    private $userID = NULL;
    /**
     * @var null
     */
    private $username = NULL;

    /**
     * @param $data     - Takes an array
     * In a real-world application,
     * the constructor might instead create a new user record in a database and
     * assign the automatically generated primary key value to the internal attribute.
     */
    function __construct($data){
        $this->userID = uniqid();
        //Using username as the index of $data array to pass in the value to username
        $this->username = $data['username'];
    }

    /**
     * @param $data
     * Calls the constructor when create() is called
     * This method which takes a single argument is being forced to exist because of the implementing from the iCrud interface
     * This method would be used in situations where
     * a new User object is created (perhaps thereby creating a new record in the database)
     * and later reused to create a new record.
     */
    public function create($data) {
        self::__construct($data);
    }

    /**
     * @return array
     * In a real-world application,
     * the read() method might fetch the associated information from the database,
     * using the internal, private ID value to know which record to fetch.
     */
    public function read() {
        return array('userID' => $this->userID, 'username' => $this->username);
    }

    /**
     * @param $data
     * Updates the username
     * Presumably, the user ID value cannot be updated,
     * so the update() method as written only updates a single internal attribute.
     */
    public function update($data) {
        $this->username = $data['username'];
    }

    /**
     * Makes both variables null
     * In a real-world example,
     * it might delete the corresponding record from the database instead.
     */
    public function delete() {
        $this->username = NULL;
        $this->userID = NULL;
    }
}