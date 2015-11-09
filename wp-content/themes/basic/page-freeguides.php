<?php get_header();
/*
Template Name: Contact Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="freeguides">
				<img src="<?php bloginfo('template_directory'); ?>/images/freeguides-img.png" class="img-responsive">
			</div>
		</div>
	</div>

	
	<div class="row">
		<div class="col-xs-12">
			<div class="page-content">
				<?php the_content(); ?>

				<div class="form-group col-sm-12">
					<div class="col-sm-4">
						<h5>Email Address</h5>
						<input type="text" class="form-control" placeholder="">
					</div>
				</div>
				
				<div class="form-group col-sm-12">
					<div class="col-sm-4">
						<h5>First Name</h5>
						<input type="text" class="form-control" placeholder="">
					</div>
				</div>

				<div class="form-group col-sm-12">
					<div class="col-sm-4">
						<h5>Last Name</h5>
						<input type="text" class="form-control" placeholder="">
					</div>
				</div>

				<div class="preferred">
					<p>Preferred Format</p>
					
					<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						    HTML
						  </label>
					</div>
					<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						    TEXT
						  </label>
					</div>

					<input class="btn btn-default" type="submit" value="Submit">
				</div>
			</div>
		</div>
	</div>


</div>





  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>




<?php get_footer(); ?>

