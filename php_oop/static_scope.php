<?php
class A {
    protected static $name;
    static function sayHi(){
        self::$name = "hello\n";
        echo "Hi from A\n";
    }
}

class B extends A {
    static function sayHi(){
        parent::sayHi();
        echo parent::$name;
        echo "Hi From B\n";
        
    }
}

B::sayHi();
// echo B::$name;