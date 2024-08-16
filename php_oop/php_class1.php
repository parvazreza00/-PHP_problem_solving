<?php

class Message{
    public $greeting = "Hello Developers";

    public function getGreetingMessage(){
        return $this->greeting;
    }
}

$obj = new Message();
echo $obj->getGreetingMessage();