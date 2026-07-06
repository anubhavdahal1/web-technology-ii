<?php
/*syntax: $array = array(value1, value2, value3);
or
$array = [value1, value2, value3];
*/
$students=array("Ram",10,22.5,true);
// var_dump($students);
$numbers=[10,11.5];
// var_dump($numbers); 

// accessing array elements
$elem=$students[1];
// echo $elem;

/*accessing array elements using foreach loop;
syntax:foreach($arrayname as $elementname){
}
*/
foreach($students as $student){
    // echo $student;
    // echo "<br>";
}

// associative array
// syntax: $arrayname=["key"=>value,"key"=>value .......]
$associative=["name"=>"John","rollno"=>1,"address"=>"Biratnagar"];
// echo $associative['rollno'];

foreach($associative as $data){
    // echo $data;
    // echo "<br>";
}

/*fetching assiciative array both keys and value using foreach loop */
foreach($associative as $key=>$value){
    // echo $key ;
    // echo "<br>";
    // echo $value;
    // echo "<br>";
    if($key=="address"){
        // echo $value;
    }
}

/* MULtidimensional array

//  $multiIndexArray=[1,2,3,5,6,7,8];
$anubhavhierarchy=[["name","rollnumber","faculty"],["Anubhav",1,"BIM"],["krishna",2,"BITM"]];
// print_r($anubhavhierarchy);
// echo $anubhavhierarchy[2][0];
?>

<!-- creating a table -->
 <table border="1" style="color:blue; border-collapse:collapse;">
    <?php
    
foreach($anubhavhierarchy as $datas){
    ?>
    <tr>
        <?php
    foreach($datas as $data){
        echo $data;
        echo "<br>";
        ?>
        <td>
        <?php  
        echo $data; ?></td>
        <?php
    }
    ?>
    </tr>
    <?php
}
?>
</table>
<?php
*/
//  2. is_array(variable)
//  Example:

$exampleArray=[1,2,3,4];
$normalvariable=5;
// print_r(is_array($exampleArray));
if(is_array($normalvariable)){
    // echo "This is an array";
}
else{
    // echo "This is not an array";
}

//  3.  array_push()
// syntax: array_push(arrayname,variable/array);
// Example:

$exampleArray=[1,2,3,4];
array_push($exampleArray,"name","rollno");
// print_r($exampleArray);
array_push($exampleArray,["a","b","c"]);
// print_r($exampleArray);



// 4.  array_unshift():
// Example:

$exampleArray=[1,2,3,4];
// array_unshift($exampleArray,"name","rollno");
// print_r($exampleArray);
array_unshift($exampleArray,["a","b","c"]);
// print_r($exampleArray);


/* 5. array_pop() :
syntax: array_pop(array);
// Example:
$colors = ["Red", "Green", "Blue"];

$removed = array_pop($colors);

echo $removed;
print_r($colors);
*/

/* 6. array_shift() :
syntax: array_shift(array);
Example:


$colors = ["Red", "Green", "Blue"];

$removed = array_shift($colors);

echo $removed;
print_r($colors);
*/
/* 7. array_flip() :
syntax: array_flip(array);
Example:

$colors = [
    "a" => "Red",
    "b" => "Green",
    "c" => "Blue"
];
// print_r($colors);
$result = array_flip($colors);
print_r($result);
// print_r($colors);
*/


/* 8. array_keys() :
syntax: array_keys(array);
Example:

$student = [
    "name" => "Ram",
    "age" => 20,
    "city" => "Pokhara",
    "xyz"=>200
];

$result = array_keys($student);

print_r($result);
*/


/*9. array_merge() :
syntax: array_merge(array1, array2, ...);
Example:

$arr1 = ["Red", "Green"];
$arr2 = ["Blue", "Yellow"];

$result = array_merge($arr1, $arr2,["a","b","c"],$arr1);

print_r($result);
eExample 2:
$arr1 = ["name"=>"Ram","age"=>20];
$arr2 = ["name"=>"Shyam","age"=>25];

$result = array_merge($arr2, $arr1);

print_r($result);
*/

/*10. array_merge_recursive() :

syntax: array_merge_recursive(array1, array2, ...);
Example:

$arr1 = [
    "name" => "Ram",
    "age" => 20
];

$arr2 = [
    "name" => "Shyam",
    "faculty" => "Science"
];

$result = array_merge_recursive($arr1, $arr2);

print_r($result);
*/

/*11. array_rand() :
syntax: array_rand(array, number);
Here, array → The array from which to select random keys.
number (optional) → Number of random keys to return.
Example:
$colors = ["Red", "Green", "Blue", "Yellow"];

$keys = array_rand($colors, 2);

print_r($keys);
*/


/*12. array_reverse() :
syntax: array_reverse(array);

Example:

$colors = ["Red", "Green", "Blue"];

$result = array_reverse($colors);

print_r($result);
*/

/*13. array_search() :

syntax: array_search(value, array);
Example:

$colors = ["Red", "Green", "Blue","Blue"];

// $key = array_search("Blue", $colors);
// echo $key;
$key = array_search("pink", $colors);

var_dump($key); // Output: bool(false) since "pink" is not found in the array

*/

/*14. array_unique() :
syntax:array_unique(array);
Example:

$colors = ["Red", "green", "Red", "Blue", "Green"];

$result = array_unique($colors);

print_r($result);

*/
/*15. array_sum() :
syntax:array_sum(array);
Example:

$numbers = [10, 20, "Hello", 40];
// echo array_sum($numbers);

$marks=["web"=>80,"dbms"=>90,"economics"=>70];

echo array_sum($marks);
*/

/*16. array_product() :
syntax:array_product(array);

Example:
$numbers = [2, 3, 4];

echo array_product($numbers);


/*17. array_values() :

Example:
$student = [
    "name" => "Ram",
    "age" => 20,
    "city" => "Pokhara"
];

$result = array_values($student);

print_r($result);
*/



/*18. array_walk() :
syntax:array_walk(array, callback_function);
Example:
$numbers = [1, 2, 3];

function square(&$value, $key)
{
    $value = $value * $value;
}

array_walk($numbers, "square");

print_r($numbers)
*/

/*19 sort():
syntax:sort(array);

Example:
$numbers = [40, 10, 30, 20];

sort($numbers);

print_r($numbers);
*/
/*20 rsort():
syntax:rsort(array);

Example:
$numbers = [40, 10, 30, 20];

rsort($numbers);

print_r($numbers);
*/
/*21 arsort():
syntax:arsort(array);

Example:
$marks = [
    "Ram" => 80,
    "Shyam" => 95,
    "Hari" => 70
];

arsort($marks);

print_r($marks);
*/

/*22 asort():
syntax:asort(array);

Example:

$marks = [
    "Ram" => 80,
    "Shyam" => 95,
    "Hari" => 70
];

asort($marks);

print_r($marks);
*/

/*23 krsort():
syntax:krsort(array);
Example:

$student = [
    
    "city" => "Pokhara",
    "name" => "Ram",
    "age" => 20
];

krsort($student);

print_r($student);
*/


/*24 ksort():
syntax:ksort(array);
Example:

$student = [
    "name" => "Ram",
    "city" => "Pokhara",
    "age" => 20
];

ksort($student);

print_r($student);
*/


/*25 count():
syntax:count(array);
Example:

$colors = ["Red", "Green", "Blue","yellow"];

echo count($colors);

*/
/*26 extract():
syntax:extract(array);
Example:

$student = [
    "nickname" => "Ramu",
    "age" => 20,
    "city" => "Pokhara"
];

extract($student);

echo $nickname . "<br>";
// echo $age . "<br>";
// echo $city;
*/

/*27 in_array():
syntax:in_array(value, array);
Example:

$colors = ["Red", "Green", "Blue"];
$result = in_array("green", $colors);
var_dump($result); // Output: bool(true) since "Green" is found in the

// if (in_array("Green", $colors)) {
//     echo "Value found";
// } else {
//     echo "Value not found";
// }
*/

/*28 list():
syntax:list($var1, $var2, $var3) = array;
Example:

$student = ["Ram", 20, "Pokhara"];

list($name, $age, $city) = $student;

echo $name . "<br>";
echo $age . "<br>";
echo $city;
*/

/*29 range():.
syntax:range(start, end, step);
Here :
start → Starting value.
end → Ending value.
step (optional) → Increment between values (default is 1).
Example:

// $numbers = range(1, 50);
// $numbers=range("a","z");
// $numbers = range(1, 50,5);
$numbers=range("a","z",2);
print_r($numbers);

*/

/*30 sizeof():
syntax:sizeof(array);
Here :

$colors = ["Red", "Green", "Blue"];

echo sizeof($colors);
*/

// 31 array_rand():  
$colors = ["Red", "Green", "Blue"];

$randomKey = array_rand($colors,2);
// print_r($randomKey); 
?>