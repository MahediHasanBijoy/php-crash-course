<?php 
/* ----------- PHP Data Types ---------- */
/*
- String 	Series of characters surrounded by quotes
- Integer 	Whole numbers
- Float 	Decimal numbers
- Boolean 	true or false
- Array 	Special variable, which can hold more than one value
- Object 	A class
- NULL 		Empty variables
- Resource 	Special variable that holds a resource
 */

/* ---------- Variable Identifier Rules --------*/
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-Z, a-z, 0-9 and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)

 */



$name = 'Bijoy';
$age = 25;
$hasKids = false;
$array = [1,3,4,5];
$pocketMoney = 10.5;

// echo $name;
// echo '<br>';
// var_dump($pocketMoney);

// echo $name . ' is ' . $age . ' years old';
// echo "$name is $age years old";

// echo 5+5;
// echo '5'+'5';


/*------- Constant defining --------*/
define('HOST', 'localhost');
define('PI', 3.1416);

echo HOST;
echo '<br>';
echo PI;
 ?>