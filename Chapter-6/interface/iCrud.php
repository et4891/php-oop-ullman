<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 7/4/2015
 * Time: 2:35 PM
 */

interface iCrud{
    public function create($data);
    public function read();
    public function update($date);
    public function delete();

}