<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet"> 
	<?php wp_head(); ?>
</head>
<?php
if(is_page_template( 'templates/first-step.php' )){
  $bclass= "firststeps-background";
}
else if(is_page_template( 'templates/our-mission.php' )){
  $bclass= "mission-background";
}
else if(is_page_template( 'templates/contact.php' )){
  $bclass= "contact-background";
}
else if(is_page_template( 'templates/services.php' )){
  $bclass= "services-background";
}
else if(is_page_template( 'templates/donate.php' )){
  $bclass= "donate-background";
}
else{
  $bclass= "home-background";
}
?>
<body class="<?php echo $bclass;?>">
  <header>
    <!--=========-TOP_BAR============-->
    <nav class="navbar navbar-expand-lg nav-top navbar-light bg-nav">
      <div class="container">
      <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <?php wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => '',
                    'menu_class'      => 'navbar-nav mx-auto'
                  ));
          ?>
       
          <ul class="navbar-nav">
          <?php if ( is_user_logged_in() ) { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_permalink('69');?>">My Account</a> 
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo wp_logout_url(); ?>">Logout</a></li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_permalink('49');?>">Login</a> 
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo get_permalink('70');?>">Register</a>
            </li>
          <?php } ?>
            
          </ul>
        </div>
      </div>
    </nav>
  </header>
<main>
