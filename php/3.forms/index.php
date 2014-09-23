<?php

	echo "<pre>";
		print_r($_POST);
	echo "</pre>";

	// process the form
	// if form was submited
	if(isset($_POST['first_name'])){
		// set var
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		// add var to alert and echo out 
		echo '<div class="alert alert-success">'.$first_name.' '.$last_name.'</div>';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Working with forms</title>
	  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	
</head>
<body>



<form role="form" action="" method="POST">

    <label for="first_name">First Name</label>
    <input type="text" id="first_name" name="first_name">

    <label for="last_name">Last Name</label>
    <input type="text" id="last_name" name="last_name">

  <button type="submit" >Submit</button>
</form>


</body>
</html>






