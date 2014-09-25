<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <style>
  
  .red {
    background-color: red;
    height: 500px;
  }
   .blue {
    background-color: blue;
    height: 500px;
  }

  </style>

</head>
<body>

<div class="col-xs-7">

<h1>Shop </h1>

  <ul class="nav nav-pills">
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="about.php?section=section2">Other About</a></li>
  </ul>


<form class="form-horizontal" role="form" action="" method="POST">
  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="price" value="<?php echo $_GET['price']; ?>" name="num1">
    </div>
  </div>
      
  <label for="math_type">Color</label>
  <select class="form-control" name="color" id="color">
    <option <?php if($_GET['color'] == 'red'){ echo 'selected="selected"'; }?> value="red">Red</option>
    <option <?php if($_GET['color'] == 'blue'){ echo 'selected="selected"'; }?> value="blue">Blue</option>
    <option <?php if($_GET['color'] == 'green'){ echo 'selected="selected"'; }?> value="green">Green</option>
  </select> 
<br>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Enter</button>
    </div>
  </div>
</form>


	
</body>
</html>