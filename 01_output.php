<?php 
// echo - Output strings, numbers, html etc
// echo 123, 'Hello', 10.5;
// echo '<br>';
// concatenation
// echo 'base'.'10';


// print - works like echo, but can only take in a single argument
// print 123;
// print 'hello';

// print_r() - print single values and arrays
// print_r(123);
// print_r('hello');
// print_r([1,2,3]);

// var_dump() - returns more info like data type and length
// var_dump('hello');
// var_dump(true);


// var_export() - similar to var_dump(), Outputs a string representation of a variable

// var_export('hello');








 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1><?php echo 'hello'; ?></h1>
</body>
</html>