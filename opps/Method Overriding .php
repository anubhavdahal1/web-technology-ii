<?php
/*
 Method Overriding 
Example:

example:1
*/
class parentclass{
    public function display(){
        echo "This is the parent class method.<br>";
    }
}
class child extends parentclass{
    public function display(){
        echo "This is the child class method.<br>";
    }
}
$childobj=new child();
// $childobj->display();

$parentobj=new parentclass();
// $parentobj->display();

//example 2:
class parentsum{
    public function sum($a,$b){
        echo "The sum of two numbers in parent: ".($a+$b)."<br>";
    }
}
class childsum extends parentsum{
    public function sum($a,$b){
        echo "The sum of two numbers in child: ".($a+$b)."<br>";
        // parent::sum(2,4);
    }
    public function callyourself(){
        self::sum(5,100);
    }
}
$childsumobj=new childsum();
// $childsumobj->sum(5,10);
$childsumobj->callyourself();
?>