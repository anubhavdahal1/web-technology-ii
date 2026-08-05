<?php
/*


Syntax:
class ParentClass
{
    // Properties
    // Methods
}

class ChildClass extends ParentClass
{
    // Additional properties and methods
}

Example:

// Parent Class
class Person
{
    public $name = "Anubhav";

    public function displayName()
    {
        echo "Name: " . $this->name . "<br>";
    }
}

// Child Class
class Student extends Person
{
    public $faculty = "BIM";

    public function displayFaculty()
    {
        echo "Faculty: " . $this->faculty;
    }
}

$student = new Student();

$student->displayName();
$student->displayFaculty();




1. Single Inheritance:
class Person
{
    public function introduce()
    {
        echo "I am a person.<br>";
    }
}

class Student extends Person
{
    public function study()
    {
        echo "I study PHP.";
    }
}

$obj = new Student();

$obj->introduce();
$obj->study();

2. Multilevel Inheritance

class Person
{
    public function introduce()
    {
        echo "I am a person.<br>";
    }
}

class Student extends Person
{
    public function study()
    {
        echo "I am studying.<br>";
    }
}

class Monitor extends Student
{
    public function monitorClass()
    {
        echo "I monitor the class.";
    }
}

$obj = new Monitor();

$obj->introduce();
$obj->study();
$obj->monitorClass();
$obj2= new student();


3. Hierarchical Inheritance
Example:


class Person
{
    public function introduce()
    {
        echo "I am a person.<br>";
    }
}

class Student extends Person
{
    public function study()
    {
        echo "Student studies.<br>";
    }
}

class Teacher extends Person
{
    public function teach()
    {
        echo "Teacher teaches.";
    }
}

$student = new Student();
$teacher = new Teacher();

$student->introduce();
$student->study();

echo "<br>";

$teacher->introduce();
$teacher->teach();




4. Multiple Inheritance (Not Supported Directly)
5. Hybrid Inheritance (Not Supported Directly)

*/

?>