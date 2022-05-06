<?php 
	if(isset($_POST['submit'])){
		if(!empty($_FILES['upload']['name'])){
			$allowed_ext = ['png', 'jpg', 'jpeg', 'gif'];

			$file_name = $_FILES['upload']['name'];
			$file_size = $_FILES['upload']['size'];
			$file_tmp = $_FILES['upload']['tmp_name'];

			$target_dir = "uploads/${file_name}";

			// Get file extension
			$file_ext = explode('.', $file_name);
			$file_ext = strtolower(end($file_ext));

			//validate file ext
			if(in_array($file_ext, $allowed_ext)){
				if($file_size <= 1000000){
					//this function will upload the file in target_dir
					move_uploaded_file($file_tmp, $target_dir);
					$message = '<p style="color: green;">The file is uploaded successfully.</p>';
				}else{
					$message = '<p style="color: red;">The file is too large.</p>';
				}
			}
			
		}else{
			$message = '<p style="color: red;">Please choose a file</p>';
		}
	}


 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Upload</title>
</head>
<body>
	<p><?php echo isset($message) ? $message : null; ?></p>
	<form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="POST" enctype="multipart/form-data">
		Select image to upload:
		<input type="file" name="upload">
		<input type="submit" value="submit" name="submit">
	</form>
</body>
</html>

