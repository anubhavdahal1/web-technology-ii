<?php
class Student
{
    // Properties (Data Members)
    public $name;
    public $faculty;
    public $semester;

    // Constructor
    public function __construct($objname, $objfaculty, $objsemester)
    {
        $this->name = $objname;
        $this->faculty = $objfaculty;
        $this->semester =  $objsemester;
        // echo "I am constructor ";
        // echo "<br>";
    }
    

    // Member Method
    public function displayDetails()
    {
        // echo "I am memeber function";
        echo "Student Name : " . $this->name . "<br>";
        echo "Faculty      : " . $this->faculty . "<br>";
        echo "Semester     : " . $this->semester;
    }
}

// Creating an object
$student1 = new Student("Ram", "BIM", "5th");

// Calling member function
// $student1->displayDetails();
$student2=new Student("Anubhav","BIM","4th");
$student2->displayDetails();
?>