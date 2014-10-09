<?php get_header();
/*
Template Name: Contact Page
*/
?>


<?php 
if(have_posts()){
	while(have_posts()){
		the_post(); 

		echo '<h1>';
			the_title(); 
		echo '</h1>';
	} 
} 
?>


<?php get_footer(); ?>