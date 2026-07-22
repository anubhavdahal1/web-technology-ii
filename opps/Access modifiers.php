<?php
1. Public
class Student
{
    public $name = "Ram";

    public function display()
    {
        // echo $this->name;
    }
}

$obj = new Student();

// echo $obj->name;


2. Private
class Student
{
    private $name = "Hari";

    public function show()
    {
        // echo $this->name;
    }
}

// $obj = new Student();

// $obj->show();


3.Protected
class Student
{
    protected $college = "Nihareeka College";

    public function showCollege()
    {
        // echo $this->college;
    }
}

class BCA extends Student
{
    public function display()
    {
        // echo $this->college;
    }
}

// $obj = new BCA();

// $obj->display();


?>