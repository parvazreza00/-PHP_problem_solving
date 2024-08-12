<?php
class Vehicle{
    public $make;
    public $model;

    public function __construct($make,$model){
        $this->make = $make;
        $this->model = $model;
    }

    public function start(){
        echo "The vehicle is starting\n";
    }

    public function info(){
        return "Vehicle: $this->make $this->model";
    }
    
}

class Car extends Vehicle{
    public $doors;

    public function __construct($make, $model, $doors)
    {
        parent::__construct($make, $model);
        $this->doors = $doors;
    }

    public function start(){
        parent::start();
        echo "The car is now running\n";
    }

    public function carInfo(){
        return parent::info(). ", Doors: $this->doors";
    }

}

$myCar = new Car("Toyota","Corolla",4);
$myCar->start();
echo $myCar->carInfo();