<?php get_header();
/*
Template Name: FAQ Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


      	<h1><?php the_title(); ?></h1>


    	<?php the_content(); ?>
<?php 

$faqs = get_field('faqs');
$i = 1;

if($faqs){

echo '<div class="panel-group" id="accordion">';
	foreach($faqs as $faq)
	{ ?>
	
	<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo'collapse_'.$i; ?>">
         <?php echo $faq['title']; ?>
        </a>
      </h4>
    </div>

    <div id="<?php echo'collapse_'.$i;?>" class="panel-collapse collapse 
    <?php if($i == 1) { echo'in';} ?>">

      <div class="panel-body">
 			<?php echo $faq['content']; ?>
       </div>
    </div>
  </div>
  <?php $i++; ?>

	<?php }
echo '</div>';
}
?>

















<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>