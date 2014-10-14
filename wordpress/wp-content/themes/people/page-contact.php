<?php get_header();
/*
Template Name: Contact Page
*/
?>




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<h1><?php the_title(); ?></h1>
 	<?php the_content(); ?>



<?php

$cats = get_field('cats');
if($cats){


	// print_r($cats);

	foreach($cats as $cat){
		echo $cat['name'];
		echo $cat['color'];
		echo $cat['type'];
	}


}


?>





  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>




<?php get_footer(); ?>

