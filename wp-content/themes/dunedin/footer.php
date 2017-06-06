<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
global $options;
$options = get_option('cOptn');
$logo = $options['logo'];

$options['logos'] = wp_get_attachment_image($logo, array($size, $size), false);
?>
 </div><!-- .site-content -->
<div class="clear"></div>
<footer id="colophon" class="footer" role="contentinfo">
<div class="footer-top">
<div class="container">
<div class="footerboxes col-md-4 revealOnScroll" data-animation="fadeInUp">
 <h3>Contact Info</h3>
  <div class="footer-contact-list">
      <ul>
          <li><?php echo $options['copyright'] ; ?></li>
          <li><p><span>Email:</span> <a href="mailto:<?php echo $options['email_link'] ; ?>"><?php echo $options['email_link'] ; ?></a> <br>   
              <span>Phone:</span> <a href="tel:<?php echo $options['phone_num'] ; ?>"><?php echo $options['phone_num'] ; ?></a></p></li>
      </ul>
  </div>
     </div>
<div class="footerboxes col-md-4 revealOnScroll" data-animation="fadeInUp">
  <h3>Navigation</h3>
<div class="footer-menus">
    <?php $defaults = array( 'menu' => 'footer-menu', 'container' => ' ', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'theme_location' => '' );
wp_nav_menu( $defaults ); ?>
</div>
</div><!--.footerboxes-->
<div class="footerboxes col-md-4 revealOnScroll" data-animation="fadeInUp">
<h3>Newsletter</h3>
    <?php get_sidebar('newsletter'); ?>
    <div class="clear"></div>
    <div class="footer-social-icons">
       <ul>
         <li><a href="#_"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
         <li><a href="#_"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
         <li><a href="#_"><i class="fa fa-google" aria-hidden="true"></i></a></li>
       </ul>
   </div>
</div><!---#footer-box3-->

</div><!---.container-->
</div>
<div class="clear"></div>
<div class="footer-bottom">
   <div class="container">
      <div class="copyright">2017 ©  Dunedin Systems . All rights reserved</div> 
   </div>
    
</div>
</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>

<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
	
<script src="<?php bloginfo( 'template_url' ); ?>/js/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.slicknav.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/script.js"></script>
<script>
    jQuery("#sl_class option:first:contains('---')").html('Select Class *');
    jQuery("#date-format option:first:contains(' ')").html('Select date  *');

</script>
</body>
</html>
