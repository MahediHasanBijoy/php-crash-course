<?php 
// Defining a function
// function registerUser(){
// 	echo 'User registered';
// }

// Calling a function
// registerUser();

// Passing arguments
// function registerEmail($email){
// 	echo $email;
// }

// registerEmail('bijoy@gmail.com');

// Returning values
// function add($num1, $num2){
// 	return $num1+$num2;
// }

// $sum = add(4,5);
// echo $sum;


// Default arguments in function
// function sum($n1 = 5, $n2 = 6){
// 	return $n1+$n2;
// }
// $sum = sum();
// echo $sum;

// Anonymous function to variables. Often used for closures and callback functions
// $subtract = function($n1, $n2){
// 	return $n1 - $n2;
// };
// echo $subtract(10,5);


// Arrow Function
$multiply = fn($n1, $n2) => $n1*$n2;

echo $multiply(9,4);


 ?>