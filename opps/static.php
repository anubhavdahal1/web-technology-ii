<?php
/*
syntax:
class Student {
    public static $college = "ABC College";
}

echo Student::$college;

syntax:
class Math {
    public static function square($n) {
        return $n * $n;
    }
}

echo Math::square(5);

Example:
*/

class student {
    public $name;
    public static $college = "ABC College";

    public function normalmethod(){
        echo "I am normal method";
        echo "<br>";
        self::staticmethod();
    }
    public static function staticmethod(){
        echo "I am static method and i am calling my own static properties as: ";
        echo self::$college;
    }

}
$anubhav =new student();
$anubhav->name="Anubhav Dahal";
echo $anubhav->name;
echo "<br>";
echo $anubhav::$college;
echo student::$college;
 $anubhav->normalmethod();
 echo "<br>";
 $anubhav->staticmethod();


// student::staticmethod();
// student::normalmethod();

class derviedstudent extends student{
    public function checkstaticcall(){
        parent::staticmethod();
    }
}
$derviedobj= new derviedstudent();
$derviedobj->checkstaticcall();
?>