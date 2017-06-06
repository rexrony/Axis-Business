<?php
/**
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
</div>
<div class="clear"></div>
<div class="newsletter-container">
     <div class="col-md-9 floatnone center-block">
       <div class="newsletter-heading col-md-6 ">
           <h4>JOIN OUR <span>MAILING LIST</span></h4>
           <span>Join us and stay up to date</span>
       </div>
        <div class="newsletter-con col-md-6 noPadd-rht">
            <?php get_sidebar('newsletter'); ?>
        </div>
</div>
</div><!--.newsletter-container--->

<div class="clear"></div>
<footer class="footer">
<div class="footer-top">
 <div class="foo-tp">
  <div class="container">
      <div class="col-md-4 footerboxes">
        <div class="foo-logo">
 <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer-logo.png" alt="" title="" /></a>
          <p>Location: Los Angeles<br>
Monday -Friday:  09:00 - 5:00</p>
   <P>+123 456 789  |  info@domain.com</p>
          
        </div>
      </div>
      <div class="col-md-2 hidden-xs footerboxes">
        <h3>Links</h3>
        <div class="footer-menus">
  <?php $defaults = array( 'menu' => 'main-menu', 'container' => ' ', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => '', 'theme_location' => '' );
                wp_nav_menu( $defaults ); ?>
        </div>
      </div>
      <div class="col-md-3 hidden-xs footerboxes">
        <h3>Services</h3>
		<div class="footer-menus2">
		    <?php $defaults = array( 'menu' => 'services menu', 'container' => ' ', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => '', 'theme_location' => '' );
                                wp_nav_menu( $defaults ); ?>
		</div>
      </div>
      <div class="col-md-3 footerboxes">
        <h3>Follow Us</h3>
        <div class="footer-social-icons">
        <ul class="social">
        <div class="circle">
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          </div>
          <div class="circle">
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          </div>
          <div class="circle">
          <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          </div>
          <div class="circle">
          <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        </div>
        </ul>
        </div><!--.footer-social-icons---->
   
       <?php get_sidebar('newsletter'); ?>
      </div>
      
    </div>
  </div>   
</div>

<div class="footer-bottom">
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright 2017 Axis Business Coaching. All Right Reserved.</p>
        </div>
      </div>
    </div>
  </div>
  
</div>

</footer><!-- .site-footer -->
</div>
<!------------------------ Back to top ------------------------------------>
<div id="back-top"> <a href="#top"> <span class="fa fa-arrow-circle-o-up"></span></a> </div>

<!--<div id="winSize"></div>-->


<!------------------------ Jquery CDN ---------------------------------
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>--->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.2.0.min.js"></script>
<!------------------------ Javascript ------------------------------------>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/library.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

<!------------------------ WOW Animation CDN------------------------------------>
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>new WOW().init();</script>

<?php wp_footer(); ?>
</body>
</html>
