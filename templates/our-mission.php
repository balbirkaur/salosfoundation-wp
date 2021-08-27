<?php

/**
 * 
 *
 *  Template Name: Our Mission
 *
 */
get_header(); ?>


<div class="container">
      <div class="row">
        <div class="col-md-12 pe-0 ps-0">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mission-top-background.png" alt="logo" class="img-fluid ">
        </div>
      </div>
</div>
    <div class="container mission-content-background-middle">
        <div class="row">
            <div class="col-md-12">
                <div class="container ps-0 pe-0">
                    <div class="row d-flex justify-content-start mission-content common-content">
                        <div class="col-md-12 col-12 col-sm-12 ">
                          <h1><?php the_title();?></h1></div>
                            <div class="col-md-4 col-sm-12 col-12 mission-member  justify-content-center">
                              <?php //the_post_thumbnail('mission-size'); ?>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mission-member.png"  class="img-fluid ">
                            </div>
                            <div class="col-md-8 col-sm-12 col-12"><?php the_content();?></div>
                        
                          </div>
                </div>
                <div class="row d-flex mission-black justify-content-center">
                <div class="col-md-4"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mission-middle.png" ></div>
                </div>
            </div>
        </div>  
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 pe-0 ps-0">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mission-bottom-background.png" alt="logo" class="img-fluid ">
        </div>
      </div>
</div>
<?php get_footer(); ?>