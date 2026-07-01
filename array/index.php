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

// MULtidimensional array

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
        // echo $data;
        // echo "<br>";
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



















?>

