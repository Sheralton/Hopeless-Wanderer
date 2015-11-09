<?php get_header();
/*
Template Name: About Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<!-- <h1><?php the_title(); ?></h1> -->
<div class="container">	
		<div class="row">
			<div class="col-xs-12">
				<div class="about">
					<img src="<?php bloginfo('template_directory'); ?>/images/about-img.png" class="img-responsive">
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="page-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

 

  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>


