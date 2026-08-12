<?php
/*
class Student
{
    // College Student
}
and another developer may also create:
class Student
{
    // University Student
}
 
syntax: namespace NamespaceName;
    for example:
        namespace College;


*/
include"College.php";
include"University.php";
include "faculty.php";

$collegeStudent = new \College\Student();
$universityStudent = new \University\Student();
$bimstudent=new \University\bim\student();

// $collegeStudent= new Student();
$collegeStudent->display();

echo "<br>";

$universityStudent->display();
echo "<br>";
$bimstudent->display();

?>