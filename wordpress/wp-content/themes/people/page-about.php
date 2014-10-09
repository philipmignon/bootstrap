<?php get_header();
/*
Template Name: About Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      	<h1><?php the_title(); ?></h1>
     	<?php the_content(); ?>

<?php

$tabs = get_field('tabs');
$i = 1;
$x = 1;
if($tabs){
	echo '<ul class="nav nav-tabs" role="tablist">';
		foreach($tabs as $tab){	?>
		<li class="<?php if($i == 1){echo 'active';} ?>">
			<a href="#<?php echo 'tab_'.$i; ?>" role="tab" data-toggle="tab"><?php echo $tab['tab_name'];?></a>
		</li>
		<?php $i++; ?>
	<?php }
	echo '</ul>';


	echo '<div class="tab-content">';
		foreach($tabs as $tab){	?>
	 		<div class="tab-pane <?php if($x == 1){echo 'active';} ?>" id="<?php echo 'tab_'.$x; ?>">
	 		<?php echo $tab['tab_content'];?>
	 		</div>
		<?php $x++; ?>
	<?php }
	echo '</div>';
}

?>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>