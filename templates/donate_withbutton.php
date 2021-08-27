<?php

/**
 * 
 *
 *  Template Name: Donate With Button
 *
 */
get_header(); ?>
 

<div class="container ">
      <div class="row">
        <div class="col-md-12 pe-0 ps-0">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/donate-top-background.png" alt="logo" class="img-fluid ">
        </div>
      </div>
</div>
    <div class="container donate-content-background-middle">
        <div class="row">
            <div class="col-md-12">
                <div class="container ps-0 pe-0">
                    <div class="row d-flex justify-content-start">
                        <div class="col-md-7 col-8 col-sm-8 donate-content common-content">
                        <h1><?php the_title();?></h1>
                          <?php the_content();?>
                        </div>
                        
                        <div class="donate-btn d-flex justify-content-center">
                          <button type="button" class="btn btn-donate" data-bs-toggle="modal" data-bs-target="#donateModal">Donate</button></div>
                      </div>
                </div>
            </div>
        </div>  
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-12 pe-0 ps-0">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/donate-bottom-background.png" alt="logo" class="img-fluid ">
        </div>
      </div>
</div>
<div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="container"><div class="row">
      <div class="col-md-12"><h5 class="modal-title" id="donateModalLabel">Thank you for your donation</h5></div>
        <div class="col-md-12"><h6>How much would you like to donate?</h6></div></div></div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3 donate-form d-flex justify-content-center">
            
            <input type="text" class="form-control" id="5-price" value="$5">
            <input type="text" class="form-control" id="10-price" value="$10">
            <input type="text" class="form-control" id="15-price" value="$15">
            <input type="text" class="form-control" id="20-price" value="$20">
            <span>$</span><input type="text" class="form-control"  value="">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-popup-donate">Donate</button>
      </div>
    </div>
  </div>
</div>
 
<?php get_footer(); ?>