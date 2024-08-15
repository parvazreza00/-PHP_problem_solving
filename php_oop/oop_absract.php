<?php
abstract class Car{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro(): string;
}
//child class
class Audi extends Car{
    public function intro() : string { 
        return "Choose German quality! I am an $this->name!";
    }
}

//child class 
class Volvo extends Car{
    public function intro(): string {
        return "Proud to be Swedish! I am $this->name!";
    }
}

//child class
class Citroen extends Car {
    public function intro() : string {
        return "French extravagance! i am $this->name!";
    }
}

$audi = new Audi("Audi");
echo $audi->intro();
echo "\n";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "\n";

$citroen = new Citroen("Citroen");
echo $citroen->intro();
echo "\n";
echo "\n";

abstract class ParentClass{
    abstract protected function prefix($name);
}

class ChildClass extends ParentClass{
    public function prefix($name){
        if($name == 'John Doe'){
            $prefix = "Mr.";
        }elseif($name == 'Jane Doe'){
            $prefix = "Mrs.";
        }else{
            $prefix = "";
        }
        return "{$prefix} {$name}";
    }
}

$obj = new ChildClass;
echo $obj->prefix("John Doe");
echo "\n";
echo $obj->prefix("Jane Doe");
echo "\n";
echo $obj->prefix("MD. Parvaz");

echo "\n";
echo "\n";

abstract class ParentClass2{
    abstract protected function prefix($name);
}

class ChildClass2 extends ParentClass2{
    public function prefix($name,$separator=".", $greet="Hello Dear"){
        if($name == 'John Doe'){
            $prefix = "Mr.";
        }elseif($name == 'Jane Doe'){
            $prefix = "Mrs.";
        }else{
            $prefix = "";
        }
        return "{$greet}! {$prefix}{$separator} {$name}";
    }
}

$obj = new ChildClass2;
echo $obj->prefix("John Doe");
echo "\n";
echo $obj->prefix("Jane Doe");
echo "\n";
echo $obj->prefix("MD. Parvaz");


