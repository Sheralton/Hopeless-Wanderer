<?php get_header();
/*
Template Name: Places Page
*/
?>



    <div class="container">
  		<div class="row">
  			<div class="col-xs-12">

  				<div class="places">
  					<img src="<?php bloginfo('template_directory'); ?>/images/places-img.png" class="img-responsive">
  				</div>

  			</div>
  		</div>

       <div class="row hidden-sm hidden-md hidden-lg">
              <div class="places-options">      
                    <div class="col-xs-12">
                       <!--    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/amsterdam-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/bali-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/brisbane-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/copenhagen-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/hoian-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/london-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/marche-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/melbourne-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/newyork-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/paris-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phnom-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/portland-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/rome-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sanfran-mobile.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/venice-mobile.png" alt=""></a> -->
                    </div>
              </div>
        </div>


       <div class="row">
              <div class="places-options2">  

              <?php 


              $places = new WP_Query(array(
                  'post_type'       =>'post',
                  'orderby'         => 'title',
                  'order'           => 'ASC',
                  'posts_per_page'  => '-1' 
              ));

              if($places->have_posts()): while ($places->have_posts()) : $places->the_post(); ?>
                
                <!-- button  -->
                <img src="<?php the_field('thumbnail');?>" class="hidden-xs" data-toggle="modal" data-target="#id<?php the_id();?>">
                
                <img src="<?php the_field('mobile_thumbnail');?>" class="hidden-sm hidden-md hidden-lg" data-toggle="modal" data-target="#id<?php the_id();?>">  

                  <!-- Modal -->
                  <div class="modal fade" id="id<?php the_id();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
                        </div>
                        <div class="modal-body">

                          <div id="carousel-<?php the_id();?>" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <?php 
                                $i = 1;
                                $images = get_field('images');
                                if($images) {
                                  foreach ($images as $image) {
                                    if($i == 1){
                                      echo '<div class="item active"> <img src="'.$image['image'].'"> </div>';
                                    }
                                    else {
                                      echo '<div class="item"> <img src="'.$image['image'].'"> </div>';
                                    }
                                    $i++;
                                  }
                                }

                                ?>



                            </div>

                            <div class="row">
                              <a class="left carousel-control" href="#carousel-<?php the_id();?>" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#carousel-<?php the_id();?>" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                              </a>
                            </div>

                          </div>



                        </div>
                      </div>
                    </div>
                  </div>

              <?php endwhile; endif; ?>
    
           <!--                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/amsterdam-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/copenhagen-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/marche-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/paris-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/rome-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/bali-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/hoian-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/melbourne-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phnom-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sanfran-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/brisbane-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/london-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/newyork-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/portland-desktop.png" alt=""></a>
                          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/venice-desktop.png" alt=""></a>
 -->
              </div>
        </div>
    </div>








<?php get_footer(); ?>

