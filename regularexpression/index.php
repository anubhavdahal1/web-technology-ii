<?php
/*
#Common Regular Expression Functions
1. preg_match():
Example :
$str = "Learning PHP Programming";

if(preg_match("/PHP/", $str))
{
    echo "Pattern Found";
}
else
{
    echo "Pattern Not Found";
}

Output:Pattern Found
*/

/*
2. preg_match_all()
$str = "PHP is easy. PHP is powerful.";

preg_match_all("/PHP/", $str, $matches);

print_r($matches);
Output: Array ( [0] => Array ( [0] => PHP [1] => PHP ) )

*/

/*
3. preg_replace()
$str = "I like Java.";

echo preg_replace("/Java/", "PHP", $str);
Output: I like PHP. 
*/

/*
4. preg_split()
$str = "Apple,Banana,Mango";

$result = preg_split("/,/", $str);

print_r($result);
Output:Array ( [0] => Apple [1] => Banana [2] => Mango )
*/

/*
#Common Regular Expression Metacharacters
symbol: .
Example: /a.c/ matches abc, axc
*/

/*
symbol: ^
Example: /^PHP/
*/

/*
symbol: $
Example: /PHP$/ 
*/

/*
symbol: *
Example: /ab* /
*/

/*
symbol: +
Example: /ab+/ 
*/

/*
symbol: ?
Example: /colou?r/
*/

/*
symbol: []
Example: /[abc]/
*/


/*
symbol: [^ ]
Example: /[^0-9]/
*/

/*
symbol: \d
Example: /\d/
*/

/*
symbol: \D
Example: /\D/
*/

/*
symbol: \w
Example: /\w+/
*/

/*
symbol: \W
Example: /\W/
*/

/*
symbol: \s
Example: /\s/
*/

/*
symbol: \S
Example: /\S/
*/



/*Use case of Regular Expressions:
Example 1: Validate Email
$email = "student@gmail.com";

if(preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email))
{
    echo "Valid Email";
}
else
{
    echo "Invalid Email";
}

output: valid Email

Example 2: Check Mobile Number

$mobile = "9841234567";

if(preg_match("/^[0-9]{10}$/", $mobile))
{
    echo "Valid Mobile Number";
}
else
{
    echo "Invalid Mobile Number";
}

Output: Valid Mobile Number

Example 3: Extract Numbers

$str = "Ram scored 85 marks in 2026.";

preg_match_all("/\d+/", $str, $matches);

print_r($matches[0]);
output: Array ( [0] => 85 [1] => 2026 )
*/
?>