	<div id="footer">
		<?php wp_footer(); ?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="ads">
						<?php 
		              	$ad= new WP_Query(array(
		                  'post_type'       =>'advertisement',
		                  'orderby'         => 'rand',
		                  'order'           => 'ASC',
		                  'posts_per_page'  => '1' 
		              	));

	              		if($ad->have_posts()): while ($ad->have_posts()) : $ad->the_post(); ?>
							<a href="<?php the_field('link'); ?>" target="blank"><img src="<?php the_field('image'); ?>" alt="" class="img-responsive"></a>
	              		<?php endwhile; endif; ?>
	              	</div>
              </div>

				<div class="col-xs-12">
					<div class="footerbg">
						<img src="<?php bloginfo('template_directory'); ?>/images/footer-bg.png" class="img-responsive" alt="">	
					</div>

					<div class="row">
						<div class="col-xs-6">
							<div class="footer">
								<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="img-responsive hidden-xs" alt="">
								<a href="mailto:hello@hopelesswanderer.com">hello@hopelesswanderer.com</a>
								
							
									<ul class="socialmedia">
										<div class="facebook">
											<li><a href="#"></a><img src="<?php bloginfo('template_directory'); ?>/images/facebook-icon.png" alt=""></li>
										</div>
										<div class="twitter">
											<li><a href="#"></a><img src="<?php bloginfo('template_directory'); ?>/images/twitter-icon.png" alt=""></li>
										</div>
										<div class="instagram">
											<li><a href="#"></a><img src="<?php bloginfo('template_directory'); ?>/images/instagram-icon.png" alt=""></li>
										</div>
									</ul>
							

							</div>
						</div>


						<div class="col-xs-6">
							<div class="advertise">
								<a href="<?php bloginfo('url');?>/advertise"><input class="btn btn-default" type="submit" value="Advertise With Us"></a>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>

	</div>
      
<!-- </div> --> <!-- x content -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightbox.js"></script>
</body>
</html>