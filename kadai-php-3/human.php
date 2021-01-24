<?php

require_once "animal.php";
require_once "thinkable.php";

class human extends animal {
    use thinkable;
    
    public $hobby = "";
    
    function __construct($name,$age,$hobby ="") {
        $this->name = $name;
        $this->age = $age;
        $this->hobby = $hobby;
    }
    
}