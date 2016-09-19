<?php
/**
 * Created by PhpStorm.
 * User: stplus
 * Date: 19/09/16
 * Time: 13:44
 */
require 'vendor/autoloading.php';

class Foo {

    public $name;

    public function __construct(){
        $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}
