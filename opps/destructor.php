<?php
class Student
{
    public $name;

    // Constructor
    public function __construct($name)
    {
        $this->name = $name;
        echo "Student object for <b>$this->name</b> has been created.<br>";
    }

    // Member Method
    public function study()
    {
        echo "$this->name is studying PHP.<br>";
    }

    // Destructor
    public function __destruct()
    {
        echo "Student object for <b>$this->name</b> has been destroyed.";
    }
}

// Creating an object
$student = new Student("Ram");

// Calling a method
$student->study();

?>