<?php

class Human {
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function getName(){
        echo $this->name;
    }
    function getAge(){
        if($this->age){
            echo "My name is $this->name and I am $this->age years old <br>";
        }else{
            echo "My name is $this->name and I do not know what i am<br>";
        }       
    }
}

$obj = new Human("Parvaz","28");
$obj->getName();
echo "<br>";
$obj->getAge();