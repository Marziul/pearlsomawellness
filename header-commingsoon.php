<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 */

?>
<!DOCTYPE html>
<html class="d" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
    
	<!-- Favicon Icon -->
    <!--<link rel="icon" href="/images/favicon.png" type="image/png"> -->
	


  <link
    href="https://fonts.googleapis.com/css?family=Lato:regular|Lato:300|Nunito+Sans:regular|Oswald:regular|Cormorant:regular"
    rel="stylesheet" type="text/css" />
    
    
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css">
    
    
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/animate.min.css">
    
    
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/comming-soon.css">
    
    	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/showit.css">
    
	
    	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/custom.css">
    
  <style>
    @font-face {
      font-family: Bird and Thorn;
      src: url('http://static.showit.co/file/EtxCC1PkSXeGCnUJtFGWFw/90375/birdandthorn-webfont.woff');
    }

    @font-face {
      font-family: Paris Sans;
      src: url('http://static.showit.co/file/Li6e7MoBRvS3mlf80Q3NyA/90375/parissans-regular.woff');
    }
  </style>

  


  <style id="si-page-css">
    
  </style>

</head>