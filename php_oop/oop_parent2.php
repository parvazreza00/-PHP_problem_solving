<?php
class Product{
    protected $name;
    protected $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function getPriceWithTax($taxRate){
        return $this->price + ($this->price * $taxRate);
    }

    public function getDescription(){
        return "Product : $this->name, Price: $this->price";
    }
}

class DigitalProduct extends Product{
    private $fileSize;

    public function __construct($name, $price, $fileSize){
        parent::__construct($name, $price);
        $this->fileSize = $fileSize;
    }

    public function getPriceWithTax($taxRate){
        return parent::getPriceWithTax(0);
    }

    public function getDescription(){
        return parent::getDescription() . ", File Size: $this->fileSize MB";
    }  
    
}

$eBook = new DigitalProduct("Learn PHP", 19.99, 5);

echo "Price with Tax: $". $eBook->getPriceWithTax(0.2)."\n";
echo $eBook->getDescription();