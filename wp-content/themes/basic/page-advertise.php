<?php get_header();
/*
Template Name: Advertise With Us Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="advertisments">
					<img src="<?php bloginfo('template_directory'); ?>/images/advertise-img.png" class="img-responsive">
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="page-content">
					<div class="basic">
						<a href="#"><h4>BASIC</h4></a>
						<div class="description">
							<h5>$100 per month</h5>
							<p>Standard Frequency: 50 page loads</p>
							<p>Viewers Reached: 1100+ clicks per month</p>
						</div>
					</div>
					

					<div class="pro">
						<a href="#"><h4>PRO</h4></a>
						<div class="description">
							<h5>$200 per month</h5>
							<p>Standard Frequency: 100 page loads</p>
							<p>Viewers Reached: 1500+ clicks per month</p>
						</div>
					</div>
					

					<div class="premium">
						<a href="#"><h4>PREMIUM</h4></a>
						<div class="description">
							<h5>$300 per month</h5>
							<p>Standard Frequency: 150 page loads</p>
							<p>Viewers Reached: 2600+ clicks per month</p>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>


	



 	<?php the_content(); ?>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>




<?php get_footer(); ?>

