<?php
/*--------- Sanitize Inputs ----------*/

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/


// Get data from a form
if (isset($_POST['submit'])) {
  // $name = $_POST['email'];
  // $email = $_POST['email'];

  // -- htmlspecialchars() - Convert special characters to HTML entities
  // $name = htmlspecialchars($_POST['name']);
  // $email = htmlspecialchars($_POST['email']);


  // -- filter_var() - Sanitize data
  // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  // echo $name;


  //-- filter_input() - Sanitize inputs
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

  
  echo $name;
}


 ?>


<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>