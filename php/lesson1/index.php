<?php 

//  output content to the browser
echo "hello";

// ====================================================================
// VARIABLES
// http://www.w3schools.com/php/php_variables.asp

	// string
	$cat = "Baba Do";

	// integer
	$cats = 10;


// ====================================================================
// FUNCTIONS - little reusable machines
// http://www.w3schools.com/php/php_functions.asp

	function make_cake(){
		// echo out a string
		echo "i made a cake";
	}

	function make_bread(){
		// echo out a string
		return "i made some bread";
	}


// next we need to call the make_cake function
// we do this by calling 
	make_cake();

// or to call the return funciton we need to echo it out to see it
	echo make_bread();


// ====================================================================
// ARRAYS - just a list of items
// http://www.w3schools.com/php/php_arrays.asp

	// an array of stings  
	$animals = array("cats", "dogs", "rats", "bats", "hats?"); 

	// an array of integers  
	$numbers = array(5, 1, 8, 1, 5, 12); 

	// getting single pieces of data from the array
	// array pockets start with 0 so the first pocket will be 0.

	// get pocket 1 from the animals array
	echo $animals[1]; // identify which pocket from the array you want to grab

	// get pocket 1 from the numbers array
	echo $numbers[1];
	echo $numbers[0];
	echo $numbers[5];

	// looping through the data
	// count the number items
	$array_count = count($animals);
	// the loop through the array for the number of pockets in the array
	for( $x=0; $x<$array_count; $x++){
	  echo $animals[$x];
	}


// ====================================================================
	// ASSOCIATIVE ARRAYS - arrays that has a key value pair
	// http://www.w3schools.com/php/php_arrays.asp
	$age = array("Peter"=>"red","Ben"=>"blue","Joe"=>"yellow");
	// or
	$age = array(
			"Peter"=>"35",
			"Ben"=>"37",
			"Joe"=>"43"
	);
// getting single pieces of data from the array
	echo $age["Peter"];
	echo $age["Ben"];

echo '<br><br><br>';

// looping through the data 
// loop through the $age array and get the key and value pair
foreach($age as $key=>$value){
 	echo $key.'<br>';
  	echo $value.'<br>';
}

// ====================================================================
// Working with strings and vars with concatenation

$cat = "Baba Do";
echo "My cats name is ".$cat;

// ====================================================================
// Adding html tags

$cat = "Frank";

echo "<h1>".$cat."</h1><br>";
echo "<p>".$cat." is such an awesome little cat.</p><br>";

?>



<h1> <?php echo $cat; ?> </h1>



<?php


// ====================================================================
// Working with vars and numbers

$x = 1;
$y = 10;

$my_number = $x + $y;

// display the number 11
echo $my_number;


// ====================================================================
// More complex functions with vars
	function make_taco($type){
		echo "I made a ".$type." taco";
	}

	make_taco("corn");
?>


<?php






function times_by_ten($number){
	return $number * 10;
}


$my_number = 10;

$total = 15 * times_by_ten($my_number);

echo $total;







?>

<!-- Wrapping HTML around you PHP tags -->
<h1><?php echo $cat; ?></h1>










