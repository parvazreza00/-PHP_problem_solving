<?php
class Counter{
    public static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount(){
        return self::$count++;
    }
}

$obj = new Counter();
echo Counter::getCount();