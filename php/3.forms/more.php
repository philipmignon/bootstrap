<?php

ini_set('display_errors', 'On');

	
	echo "<pre>";
		print_r($_POST);
	echo "</pre>";

	// process the form
	// if form was submited
	if(isset($_POST['submit'])){
		// set var
		$cat_name  = $_POST['cat_name'];
		$cat_info  = $_POST['cat_info'];
		$cat_color = $_POST['cat_color'];
		$is_happy  = $_POST['is_happy'];

		// add var to alert and echo out 
		echo '<div class="alert alert-success">';
			echo '<h2>We got a cat back</h2>';
			echo 'NAME: '.$cat_name.'<br>';
			echo 'INFO: '.$cat_info.'<br>';
			echo 'COLOR: '.$cat_color.'<br>';
			echo 'HAPPY: '.$is_happy.'<br>';
		echo '</div>';	
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
	  
			<div class="form-group">
				<label for="cat_info">Cat Info</label>
				<textarea class="form-control" name="cat_info" id="cat_info" rows="10"></textarea>
 			</div>
 		
			<label for="cat_color">Cat Color</label>
			<select class="form-control" name="cat_color" id="cat_color">
			  <option value="Black">Black</option>
			  <option value="White">White</option>
			  <option value="Brown">Brown</option>
			  <option value="Pattern">Pattern</option>
			  <option value="Blue">Blue</option>
			</select>
			
			<br>
			<div class="checkbox">
			  <label>
			    <input type="checkbox" value="Yes" name="is_happy">
			    Is Happy?
			  </label>
			</div>
			<br>
		  <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
		</form>
	</div>

	
</body>
</html>






