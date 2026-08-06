<?php

//  Traits

trait greet{
    public $test="this is a test";
    public function sayHello($name){
        echo "Hello $name";
        echo "<br>";
        echo "$this->test";
    }
}

trait greeet1{
    public function bye(){
        echo "thank you for visiting";
    }
}
class Person{
    use greet;
    use greeet1;


}
class person2{
     use greet;
}
$obj=new person();
// $obj->sayHello("John");
// $obj->bye();


$obj2=new person2();
// $obj2->test="this is a test";
$obj2->sayHello("anubhav");

?>