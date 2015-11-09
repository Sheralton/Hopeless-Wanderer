<?php get_header();
/*
Template Name: Journal Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<div class="container">	
		<div class="row">
			<div class="col-xs-12">

				<div class="journal">
					<img src="<?php bloginfo('template_directory'); ?>/images/journal-img.png" class="img-responsive">
				</div>

			</div>

		</div>
	</div>

	<div class="container">
		<div class="row">
			

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
				<div class="words">
			
						<?php 


	              $journal = new WP_Query(array(
	                  'post_type'       =>'journals',
	                  'orderby'         => 'title',
	                  'order'           => 'ASC',
	                  'posts_per_page'  => '-1' 
	              ));

	              if($journal->have_posts()): while ($journal->have_posts()) : $journal->the_post(); ?>
						
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<!--Where is Home?-->
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingOne">
						      <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#id<?php the_id();?>" aria-expanded="true" aria-controls="collapseOne">
						          <?php the_title(); ?>
						        </a>
						      </h4>
						    </div>
						    <div id="id<?php the_id();?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						      <div class="panel-body">
						       <?php the_content(); ?>
						      </div>
						    </div>
						  </div>

						</div>

					<?php endwhile; endif; ?>

				</div>
			</div>
		</div>
	</div>







  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>




<?php get_footer(); ?>

