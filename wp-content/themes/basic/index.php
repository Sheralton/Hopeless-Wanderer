<?php get_header(); ?>



      <!--<h2>
      	<a href="<?php the_permalink() ?>">
      		<?php the_title(); ?>
      	</a>
      </h2> -->


      <div class="row hidden-sm hidden-md hidden-lg">
            <div class="main">
                  <div class="col-xs-12">
                        <img src="<?php bloginfo('template_directory'); ?>/images/main-xs.png" class="img-responsive" alt="">
                  </div>
            </div>
      </div>


      <div class="row hidden-sm hidden-md hidden-lg">
            <div class="options">      
                  <div class="col-xs-12">
                        <a href="<?php bloginfo('url');?>/about"><img src="<?php bloginfo('template_directory'); ?>/images/about-mobile.png" alt=""></a>
                        <a href="<?php bloginfo('url');?>/places"><img src="<?php bloginfo('template_directory'); ?>/images/places-mobile.png" alt=""></a>
                        <a href="<?php bloginfo('url');?>/journal"><img src="<?php bloginfo('template_directory'); ?>/images/journal-mobile.png" alt=""></a>
                        <a href="<?php bloginfo('url');?>/freeguides"><img src="<?php bloginfo('template_directory'); ?>/images/freeguides-mobile.png" alt=""></a>
                  </div>
            </div>
      </div>




      
            <div class="row hidden-xs">
                  <div class="main">
                        <div class="col-sm-12">
                              <img src="<?php bloginfo('template_directory'); ?>/images/main-lg.png" class="img-responsive" alt="">
                        </div>
                  </div>
            </div>


      <div class="container">
            <div class="row hidden-xs">
                  <div class="row-no-pad">
                        <div class="options">      
                              <div class="col-sm-12">
                                    <a href="<?php bloginfo('url');?>/about"><img src="<?php bloginfo('template_directory'); ?>/images/about-desktop.png" alt=""></a>
                              </div>
                  

                             
                              <div class="col-sm-6">
                                    <a href="<?php bloginfo('url');?>/places"><img src="<?php bloginfo('template_directory'); ?>/images/places-desktop.png" alt=""></a>
                               </div>

                              <div class="col-sm-6">
                                    <a href="<?php bloginfo('url');?>/journal"><img src="<?php bloginfo('template_directory'); ?>/images/journal-desktop.png" alt=""></a>                              
                                    <a href="<?php bloginfo('url');?>/freeguides"><img src="<?php bloginfo('template_directory'); ?>/images/freeguides-desktop.png" alt=""></a>
                              </div>

                             
                              
                        </div>
                  </div>
            </div>
      </div>
      


<?php if(have_posts()): while (have_posts()) : the_post(); ?>


<?php endwhile; endif; ?>

<?php get_footer(); ?>