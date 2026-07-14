<?php

// 1.empty():
$name = "";
if (empty($name)) {
    // echo "Variable is empty";
} else {
    // echo "Variable is not empty";
}

//output:Variable is empty



// 2.gettype():
$x = 100;
// echo gettype($x);
    
// output:integer


// 3.intval():
$x = "150.75";
// echo intval($x);
    
// Output:150



//4.is_null()
$x = NULL;
if(is_null($x))
{
    // echo "Variable is NULL";
}
else
{
    // echo "Variable is not NULL";
}
    
// Output:Variable is NULL



// 5. isset()
$name = "Ram";

if(isset($name))
{
    // echo "Variable is set";
}
    else{
    // echo "The variable is NULL";
}
    
// Output:Variable is set



//6. print_r()
$colors = ["Red","Green","Blue"];
// print_r($colors);
    
// Output:Array ( [0] => Red [1] => Green [2] => Blue )



// 7. serialize()
$student = [
    "name"=>"Ram",
    "age"=>20
];

$data = serialize($student);

// echo $data;
    
// Output:   a:2:{s:4:"name";s:3:"Ram";s:3:"age";i:20;}


    

// 8. unserialize()
$data = 'a:2:{s:4:"name";s:3:"Ram";s:3:"age";i:20;}';
// $result = unserialize($data);
// print_r($result);
// Output: Array ( [name] => Ram [age] => 20 )



// 9. unset()
$name = "Ram";
unset($name);
echo isset($name);    
// Output:Ram


// 10. var_dump()
$x = 100;
// var_dump($x);
// Output:int(100)
?>