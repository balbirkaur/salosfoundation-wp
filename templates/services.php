<?php

/**
 * 
 *
 *  Template Name: Services
 *
 */
get_header(); ?>
 

<div class="container">
      <div class="row">
        <div class="col-md-12 pe-0 ps-0">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/services-top-background.png" alt="logo" class="img-fluid ">
        </div>
      </div>
</div>
    <div class="container services-content-background-middle">
        <div class="row">
            <div class="col-md-12">
                <div class="container ps-0 pe-0">
                    <div class="row d-flex justify-content-start">
                        <div class="col-md-7 col-8 col-sm-8 service-content common-content">
                        <h1><?php the_title();?></h1>
                         <div class="pt-5"> <?php the_content();?></div>
                        </div>
                      </div>
                </div>
            </div>
        </div>  
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 pe-0 ps-0">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/services-bottom-background.png" alt="logo" class="img-fluid ">
        </div>
      </div>
</div>

    <!--<div class="container-fluid firststep-content-background-bottom"></div>-->

<?php get_footer(); ?>