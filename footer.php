<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>  
</main>
<footer>
<div class="footer-bck">
  <div class="container">
	<div class="row footer-space d-flex justify-content-center">
		<div class="col-12 col-sm-6 col-md-6 text-md-end text-center">
			<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/learn-more.png">
		</div>
		<div class="footer-submit col-12 col-sm-6 col-md-6 text-start">
			<a href="<?php echo get_permalink('21');?>">SUBMIT</a></div>
		</div>
  </div>
</div>
<div class="copyright-background footer-copyright">
  <div class="container-fluid ">
	<div class="row">
	  <div class="col-md-12  d-flex justify-content-center">
		Copyright © 2021 THE FIVE SOLAS FOUNDATION A NOT-FOR-PROFIT 501C3
	  </div>
	  <div class="col-md-12 footer-links d-flex justify-content-center">
		<ul>
		  <li><a>Ethics reporting</a></li>
		  <li><a>Privacy & Cookies</a></li>
		  <li><a>Notice Terms of Use</a></li>
		</ul>
	  </div>
	</div>
  </div>
</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
