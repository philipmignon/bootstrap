<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Includes and Fancy</title>

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<style>

	.container	{
		background-color:#ccc;
	}
	</style>

</head>
<body>
<?php

// $script   = $_SERVER['SCRIPT_NAME'];
// echo $script;

function is_page($page){
	// get current URL script part
	$script   = $_SERVER['SCRIPT_NAME'];
	// strip out location of the folder paths
	$current_page = str_replace("/bootstrap/php/lesson2/","",$script);

	// remove the .php from the path
	$current_page = str_replace(".php","",$current_page);

	if($current_page == $page){
		echo 'active';
	}
}
?>

<div class="container">

	<ul class="nav nav-pills">
		<li class="<?php is_page('index'); ?>"><a href="index.php">Home</a></li>
		<li class="<?php is_page('about'); ?>"><a href="about.php">About</a></li>
		<li class="<?php is_page('contact'); ?>"><a href="contact.php">Contact</a></li>
	</ul>

<hr>

