<?php


if(isset($_POST['submit'])){

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];

  $math_type = $_POST['math_type'];

  if($math_type == '*'){
    $total = $num1 * $num2; 
  }
  elseif($math_type == '/'){
    $total = $num1 / $num2; 
  }
  else{
    $total = $num1 + $num2; 
  }

}


// http://localhost/cal/?sub=deal
// echo $_GET['sub'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

</head>
<body>

<div class="col-xs-7">

<div class="well">
<h2>Add Numbers Together</h2>
<form class="form-horizontal" role="form" action="" method="POST">
  <div class="form-group">
    <label for="num1" class="col-sm-2 control-label">Number 1</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="num1" value="<?php if($num1){ echo $num1; }?>" name="num1">
    </div>
  </div>
  <div class="form-group">
    <label for="num2" class="col-sm-2 control-label">Number 2</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="num2" name="num2" value="<?php if($num2){ echo $num2; }?>">
    </div>
  </div>
      
  <label for="math_type">Type of Math</label>
  <select class="form-control" name="math_type" id="math_type">
    <option <?php if($math_type == '*'){ echo 'selected="selected"'; }?> value="*">Multiple</option>
    <option <?php if($math_type == '+'){ echo 'selected="selected"'; }?> value="+">Add</option>
    <option <?php if($math_type == '/'){ echo 'selected="selected"'; }?> value="/">Div</option>
  </select> 
<br>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Enter</button>
    </div>
  </div>
</form>


<?php

if( $total ){
   echo '<div class="alert alert-success">Total = '.$total.'</div>';
}


?>

</div>
</div>




	
</body>
</html>