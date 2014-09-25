<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

</head>
<body>

<div class="col-xs-7">


<h1>What do I have in the URL

<?php

echo $_GET['search'];
echo '<br>';
echo $_GET['color'];

?>

</h1>


<form class="form-horizontal" role="form" action="" method="GET">
  <div class="form-group">
    <label for="search" class="col-sm-2 control-label">search</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="search" 
        name="search" value="<?php if($_GET['search']){ echo $_GET['search']; }?>">
    </div>
  </div>

    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Search</button>
    </div>
  </div>

</form>



</div>




	
</body>
</html>