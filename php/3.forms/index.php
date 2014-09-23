<?php

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";

	// process the form
	// if form was submited
	if(isset($_POST['cat_name'])){
		// set var
		$cat = $_POST['cat_name'];
		// add var to alert and echo out 
		echo '<div class="alert alert-success">'.$cat.'</div>';
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

	<div class="col-xs-6 well">
		<h2>Enter Cat Info</h2>
		<form role="form" action="" method="POST">
		  <div class="form-group">
		    <label for="cat_name">Name</label>
		    <input type="text" class="form-control" id="cat_name" name="cat_name">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

	
</body>
</html>






