<?php
class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
        echo self::$name."\n";
        self::doSomething();
        echo "fibonacci Series $n\n";
    }
    static function doSomething(){
        echo "Doing something\n";
    }
    function factorial($n){
        self::$name = "Parvaz";
        $this->doSomething();
        self::doSomething();
        $this->number = 12;
        echo "Calculating factorial of $n\n";
    }
}

$mathc = new MathCalculator();
$mathc->factorial(8);

MathCalculator::fibonacci(7);
echo MathCalculator::$name;