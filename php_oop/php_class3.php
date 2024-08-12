<?php
class ParentClass{
    protected $message = "I am from Parent class";

    public function getMessage(){
        return $this->message;
    }
}

class ChildClass extends ParentClass{
    public function getParentMessage(){
        return parent::getMessage();
    }
}

$obj = new ChildClass();
echo $obj->getParentMessage();



