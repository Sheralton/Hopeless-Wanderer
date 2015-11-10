<?php wp_footer(); ?>
<div class="container">


 	<div class="row">
		<div class="col-xs-12 ">
			<div class="ads">
				<?php 
              	$ad = new WP_Query(array(
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
  </div>


	<div class="row">
		<div class="col-xs-12 footer">
 		<div class="col-xs-6">

				<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="img-responsive hidden-xs" alt="">
				<a href="mailto:hello@hopelesswanderer.com">hello@hopelesswanderer.com</a>
									
				<ul class="socialmedia">
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-icon.png"></a></li>
					<li><a href="https://twitter.com/trvllinglight" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-icon.png"></a></li>
					<li><a href="https://www.instagram.com/thetravellinglight/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/instagram-icon.png"></a></li>
				</ul>

			</div>	

			<div class="col-xs-6 ">
				<a href="<?php bloginfo('url');?>/advertise" class="btn btn-default pull-right">Advertise With Us</a>
			</div>
		</div>
		</div>
	</div>

						
</div>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightbox.js"></script>
</body>
</html>