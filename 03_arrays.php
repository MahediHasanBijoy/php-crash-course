<?php 
// Simple array
$numbers = [1,3,4,5];
$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);

// var_dump($numbers);

// echo $fruits[0];


// Associative Array
$colors = [1=>'red', 3=>'blue', 4=>'green'];

// print_r($colors);
// echo $colors[3];

$hex = ['red'=>'#f00', 'blue'=>'#0f0', 'green'=>'#00f'];

// echo $hex['blue'];

$person = ['first_name'=> 'Mahedi', 'last_name'=>'Hasan', 'email'=>'bijoy@gmail.com'];
// echo $person['first_name'];

/*------ Multidimensional Array------*/
$people = [
	[
		'first_name'=> 'Mahedi',
		'last_name'=>'Hasan',
		'email'=>'bijoy@gmail.com'
	],
	[
		'first_name'=> 'Jane',
		'last_name'=>'Doe',
		'email'=>'jane@gmail.com'
	],
	[
		'first_name'=> 'Nick',
		'last_name'=>'Fury',
		'email'=>'nick@gmail.com'
	]
];
// echo $people[1]['email'];

var_dump(json_encode($people));


 ?>