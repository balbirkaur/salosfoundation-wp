<?php

/**
 * 
 *
 *  Template Name: First Step
 *
 */
get_header(); ?>
 
<!-- <div class="container-fluid firststep-content-background-top logo-distance firststeps-container ">
      <div class="row d-flex justify-content-center">
        <div class="col-8">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/black-logo.png" alt="logo" class="img-fluid logo-img">
        </div>
      </div>
</div>-->
<div class="container ">
      <div class="row">
        <div class="col-md-12 pe-0 ps-0">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/firststeps-top-background.png" alt="logo" class="img-fluid ">
        </div>
      </div>
</div>
    <div class="container firststep-content-background-middle">
        <div class="row">
            <div class="col-md-12">
                <div class="container ps-0 pe-0">
                    <div class="row d-flex justify-content-start">
                        <div class="col-md-7 col-8 col-sm-8 step-content common-content">
                        <h1><?php the_title();?></h1>
                          <?php the_content();?>
                        </div>
                      </div>
                </div>
            </div>
        </div>  
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 pe-0 ps-0">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/firststeps-bottom-background.png" alt="logo" class="img-fluid ">
        </div>
      </div>
</div>

    <!--<div class="container-fluid firststep-content-background-bottom"></div>-->

<?php get_footer(); ?>