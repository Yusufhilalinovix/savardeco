<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SABAR_DECO
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name') ?></title>

	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.min.css">
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/styles.css">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/web-fonts-with-css/css/fontawesome.min.css">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/web-fonts-with-css/css/fontawesome-all.min.css">


      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


     <!--Navbar-->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
         <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="image"/></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
       
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
  
      
      <?php sd_nav_bootstrap(); ?>

          <li class="nav-item">
        <a class="nav-link" href="#panneau">Des Services</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#faqs">FaQs</a>
      </li>
      
    </ul>
  </div>
  </div>
</nav>
          <!--end-Navbar-->