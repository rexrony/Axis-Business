<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico" type="image/x-icon">
	
<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico" type="image/x-icon">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>

<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600|Raleway:300,400,500,600,800" rel="stylesheet">

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">
   
    <!--.slick slide-->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/slick-theme.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/slick.css">

<!--.slick Nav-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/slicknav.min.css">
 
<!--.Animate Css-->  
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/animate.css">
   
	<?php
    	global $options;global $logo;global $copyrite;
		$options = get_option('cOptn');
		$logo = $options['logo']; 
        $size = 434;
		$options['logos'] = wp_get_attachment_image($logo, array($size, $size), false);
      
		$att_img = wp_get_attachment_image($logo, array($size, $size), false); 
		$logoSrc = wp_get_attachment_url($logo);
		$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
    
    wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page">
	

<header class="mainheader col-md-12 noPadd">
<div class="container">
<div class="head-left col-md-3 noPadd">
<div class="sitelogo noPadd revealOnScroll" data-animation="flipInX"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $options['logos'] ; ?></a>   
</div>
 </div><!--.head-left-->
<div class="head-right rht col-md-6 noPadd">
 <div class="mainmenu">
       <?php $defaults = array( 'menu' => 'main-menu', 'container' => ' ', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => 'resp_menu', 'theme_location' => 'primary' );
wp_nav_menu( $defaults ); ?>
 </div><!--.mainmenu--->

</div><!--.head-right--->
</div><!--.container--->
</header><!-- .site-header -->
        
<div class="clear"></div>
<div id="content" class="sitecontent">