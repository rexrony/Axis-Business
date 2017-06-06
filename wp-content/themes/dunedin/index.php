<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

 <div class="clear"></div>
 
<div class="contentarea-index col-md-12 noPadd">

<div class="slides-container">
<div class="slide-con">
<?php $index_query = new WP_Query(array('post_type' => 'slider_home', 'posts_per_page' => 5)); ?>
 <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
  
<div class="slides"><?php the_post_thumbnail('full'); ?>
<div class="slider-text-con">
 <div class="container">
<div class="slide-caption">
     <h2><?php the_title(); ?></h2>
      <section><?php echo $content = get_the_content(); ?></section>
      <div class="slide-readmore"><a href="<?php the_permalink();?>">Read More</a></div>
    </div>
    
</div>
</div><!--.slider-text-con-->
</div><!--.slides-->
<?php endwhile; ?>
</div><!--.slide-con-->
</div><!--.slides-container-->
<div class="clear"></div>
<div class="know_about">
    <div class="container">
        <h2>Know About Us</h2>
        <p>Nam liber tempor cum soluta nobis eleifend option <br> congue nihil imperdiet doming id quod mazim 
</p>
    </div>
</div>
<div class="clear"></div>
<div class="best_container">
       <?php $index_query = new WP_Query(array('post_type' => 'best_at', 'posts_per_page' => 1)); ?>
 <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        <div class="col-md-6 noPadd">
          <div class="content-pad"><h4><?php the_title(); ?></h4>
          <section>
              <?php the_content(); ?>
          </section>
          <p><a class="cnt-readmre" href="<?php the_permalink(); ?>">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
          </div>
          
        </div>
        <div class="col-md-6 noPadd">
          <div class="at-img">
             <img src="<?php the_post_thumbnail_url('full'); ?>" alt=""  />  
          </div>
        </div>
        <?php endwhile; ?>
   
</div><!--.best_container--->
<div class="clear"></div>
<div class="our-servs">
        <div class="container">
            <div class="servhome-heading">
                <h2>Services We provide</h2>
                <section class="col-md-8 floatnone center-block">
                    <p>Volutpat wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo 
                        consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu 
                        feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent</p>
                </section>
            </div>
            <div class="clear"></div>  
            <div class="serv-container col-md-12 noPadd">
                <?php
                $count=1;
                $index_query = new WP_Query(array('post_type' => 'services_posts', 'posts_per_page' => 3,'order' => 'ASC')); ?>
                <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
                <div class="serv-box col-md-4 <?php if($count == '1'){echo 'noPadd-lft';}?>">
                    <div class="serv-con">
                        <div class="serv-con-img"><?php the_post_thumbnail(); ?></div>
                        <div class="serv-title">
                            <h4><?php the_title(); ?></h4>
                        </div>
                        <div class="serv-con-text">
                            <?php $con = get_the_content();
                            echo showBrief($con, 20);
                            ?>
                        </div>
                    </div><!--.serv-con-->
                </div>
                <?php 
                $count++;
                endwhile; ?>
            </div>           
        </div><!--.container-->
</div><!--.our-servs-->
<div class="clear"></div>
<div class="testimonials-container">
	<div class="container">
       <div class="test-con">
       <div class="test-heading">
           <h3>What Our Clients are saying</h3>
       </div>
       <div class="clear"></div>
       <div class="col-md-8 floatnone center-block noPadd">
       <div class="testimonial">
        <?php $index_query = new WP_Query(array( 'post_type' => 'testimonials_post', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
        <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        	<div class="testi-box">
                <section>
                     <p><?php $content=get_the_content(); echo substr($content,0,480); ?></p>
                </section>
                <div class="clear"></div>
            	<div class="tst-nme">
            	<h5><?php the_title(); ?></h5>
            	</div>
            </div>    
        <?php endwhile; wp_reset_postdata(); ?>
		</div>
       </div>
       </div><!--.test-con--->
    </div><!--.container-->
</div><!--.testimonial-section--->
<div class="clear"></div>
<div class="message-founder">
    <div class="container">
       <div class="ceo-heading">
           <h2>MESSAGE FORM THE FOUNDER</h2>
       </div>
       <div class="clear"></div>
        <div class="mess col-md-12 noPadd">
    <?php $index_query = new WP_Query(array( 'post_type' => 'message_ceo', 'posts_per_page' => 1,'order'=>'DESC' )); ?>
        <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        <div class="col-md-3 noPadd-lft">
            <section class="ceo-img"><?php the_post_thumbnail();?></section>
        </div>
        <div class="col-md-7 noPadd-rht">
           <div class="message-text"> <?php the_content(); ?></div> 
           <div class="ceo-intials">
              <section><?php the_title(); ?></section>
               <span>FOUNDER</span>
           </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
        </div><!--.mess-->
    </div><!--.container--->
</div><!--.message-founder--->
<div class="clear"></div>
<div class="contact-container">
    <div class="container">
       <div class="contact-heading">
           <h2>Contact</h2>
       </div>
        <div class="col-md-8 floatnone center-block">
            <?php echo do_shortcode('[contact-form-7 id="19" title="Contact form"]'); ?>
        </div>
    </div>
</div>
</div><!-- .content-area -->
<?php get_footer(); ?>	


