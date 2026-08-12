<?php
/*
Custom Exception Handling

syntax: 
class MyException extends Exception
{
    // Custom exception code
}

Example:
To check whether a student is eligible for admission.


class AgeException extends Exception
{
    public function showMessage()
    {
        return "Invalid age entered.";
    }
}

$age = 15;

try {

    if ($age < 18) {
        throw new AgeException("Age must be 18 or above.");
    }

}
catch (AgeException $e) {

    echo $e->showMessage() . "<br>";
    echo $e->getMessage();

}

/*


?>