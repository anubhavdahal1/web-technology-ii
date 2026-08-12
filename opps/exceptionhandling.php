<?php
/* 
Exceptionhandling

The general syntax is:
try {
    // Code that may cause an exception
}
catch (Exception $e) {
    // Code to handle the exception
}
finally {
    // Code that always executes
}

 Example 1:

try {

    throw new Exception("Something went wrong.","101");

}
catch (Exception $e) {

    echo "Error: " . $e->getMessage();
    echo "<br>";
    echo "Error code: ".$e->getCode();
    echo "<br>";
    echo "Error occured in file :". $e->getFile();
    echo "<br>";
    echo "Error occured in line number :". $e->getLine();
     echo "<br>";
}
finally{
    echo "I am clean up code";
}
     

/*

Example -2

try {

    echo "Program started.<br>";

    throw new Exception("An error occurred.");

    echo "This line will not execute.<br>";

}
catch (Exception $e) {

    echo "Error: " . $e->getMessage() . "<br>";

}
finally {

    echo "Finally block executed.";

}
    
/*
Example-3


$age = 20;

try {

    if ($age < 18) {
        throw new Exception("Age must be 18 or above.");
    }
    echo "You are eligible.";
}
catch (Exception $e) {

    echo "Error: " . $e->getMessage();

}

/*
example-4

$a=5;
$b=1;
try{
if($b==0){
    throw new Exception ("Divide by zero is not possible");
}
$c=$a/$b;
echo "The result is :".$c;
}
catch(Exception $excp){
    echo "Error : ". $excp->getMessage();
}


exception handling using function 

function sum($a,$b){
if($b==0){
    throw new Exception ("Divide by zero is not possible");
}
$c=$a/$b;
echo "The result is :".$c;

}
try{
    sum(2,5);
}
catch(Exception $xyz){
    echo "Error: ".$xyz->getMessage();
}

?>