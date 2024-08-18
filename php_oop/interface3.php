<?php

interface ShapeInterface
{
    public function area();
}

class Circle implements ShapeInterface
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return number_format(pi() * pow($this->radius, 2), 2);
    }
}

class Square implements ShapeInterface {
    private $side;
    
    public function __construct($side)
    {
        $this->side = $side;
    }

    public function area(){
        return number_format(pow($this->side, 2), 2);
    }

}

function printArea(ShapeInterface $shape){
    echo "The area is : ". $shape->area(). "\n";
}

$circle = new Circle(5);
$square = new Square(4);

printArea($circle);
printArea($square);
