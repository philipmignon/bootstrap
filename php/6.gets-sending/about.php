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

<h1>About <?php echo $_GET['section']; ?></h1>
    <a class="btn btn-primary btn-lg" href="shop.php/?price=45&color=red">BUY this product now</a>


  <ul class="nav nav-pills">
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="about.php?section=section2">Other About</a></li>
  </ul>




</div>

<div class="col-xs-12 red" id="section1">
  <div class="well">
    <h2>deal</h2>
  </div>
</div>

<div class="col-xs-12 blue" id="section2">
  <div class="well">
    <h2>other deal</h2>
  </div>
</div>




	
</body>
</html>