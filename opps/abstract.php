<?php
## Abstract Class
// syntax:
abstract class ClassName
{
    abstract public function methodName();

    public function normalMethod()
    {
        // Code
    }
}

// Example: 

abstract class Shape
{
    abstract public function area();

    public function display()
    {
        echo "Calculating Area...<br>";
    }
}

class Rectangle extends Shape
{
    private $length = 10;
    private $breadth = 5;

    public function area()
    {
        echo "Area = " . ($this->length * $this->breadth);
    }
}

$obj = new Rectangle();

$obj->display();
$obj->area();


?>