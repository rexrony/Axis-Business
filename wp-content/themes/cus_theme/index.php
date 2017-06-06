<?php
/**
 * The main template file.
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header('home'); ?>

<div class="clear"></div>
<div class="welcome-note col-md-12 padd40">
    <div class="container"> 
 <?php $welcome_query = new WP_Query(array('post_type' => 'welcome_note', 'posts_per_page' => 1,'order' => 'ASC')); ?>
 <?php while ($welcome_query->have_posts()) : $welcome_query->the_post(); ?>
 <div class="welcome-content col-md-7">
   <div class="welcome-heading col-md-12 noPadd"><h2><?php echo $gettitle = get_the_title(); ?></h2> </div>
   <div class="col-md-12 welcome-text noPadd"><?php the_content();?></div>  
 </div><!---.welcome-content -->
 <div class="welcome-img col-md-4 rht">
     <?php the_post_thumbnail('full'); ?>
 </div>
<?php endwhile; ?>
    </div>
</div><!--.welcome-note--->
<div class="clear"></div>
<div class="services-container">
    <div class="container">
        <div class="serv-heading">
            <h3>Our Services</h3>
   <p>Axis BC will empower, guide, and teach you how to utilize Strategic Thinking to achieve independence and be able to replicate learnings, grow, and improve from within. <br>
Axis BC will provide necessary tools to engage with you and your team promoting and effective & results oriented process.</p>
</div>
<div class="clear"></div>  
 <div class="serv-container col-md-12 noPadd">
  <?php $index_query = new WP_Query(array('post_type' => 'our_services', 'posts_per_page' => -1,'order' => 'ASC')); ?>
  <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
     <div class="serv-box col-md-4 ">
       <div class="serv-con">
       <div class="serv-con-img"><?php the_post_thumbnail(); ?></div>
        <div class="serv-title">
             <h5><?php the_title(); ?></h5>
         </div>
         </div><!--.serv-con-->
     </div>
     <?php endwhile; ?>
 </div>           
 </div><!--.container-->
</div><!--.our-servs-->
<div class="clear"></div>
<div class="our_vision_container">
    <div class="container">
        <div class="vision-con">
<?php $index_query = new WP_Query(array('post_type' => 'vision', 'posts_per_page' => 1,'order' => 'ASC')); ?>
 <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
            <div class="col-md-7 noPadd vis-box">
                <section>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </section>
            </div>
            <div class="col-md-5 vis-img noPadd rht"><?php the_post_thumbnail('full') ;?></div>
            <?php endwhile; ?>
        </div>
    </div>
</div><!--.our_vision_container-->
<div class="coach_container">
    <div class="container">
        <div class="col-md-6 coach-content">
        <h2>The Coach</h2>
        <div class="clear"></div>
        <div class="col-md-12 floatnone center-block noPadd-lft">
            <div class="col-md-6 coach-box">
                <section>
                    20+ years combined experience as a Strategic Marketing and Sales Professional
                </section>
            </div>
            <div class="col-md-6 coach-box">
            <section> 10+ in senior Marketing positions with a successful background in: value creation, planning & execution of integrated sales/marketing strategies, in both Brand and Agency</section>
           </div>
            <div class="clear"></div>
            <div class="col-md-6 coach-box"><section>
                Strong business skills and team leadership –have been conducive to generating increase in revenues, improved levels of brand reputation, increased retail partnership relations, customer loyalty and overall business performance
            </section></div>
            <div class="col-md-6 coach-box"><section>Reaching objectives under competitive landscapes and economic pressured environments have been a constant and a motivation</section></div>
        </div>
        </div>
        <div class="col-md-5 rht noPadd">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/experience.png" alt="">
        </div>
    </div>
</div><!--.coach_container-->
<div class="clear"></div>
<div class="testimonial-section">
	<div class="container">
      <div class="testimonial-heading"> <h2>Testimonails</h2></div>
      <div class="clear"></div>
       <div class="test-con">
        <div class="testimonial">
        <?php $index_query = new WP_Query(array( 'post_type' => 'our_testimonials', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
        <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        	<div class="col-md-3 testi-box">
                <section>
                    <img class="quote" src="<?php echo bloginfo('template_directory') ?>/images/quotes.png" alt="" /><br>
                     <p><?php $content=get_the_content(); echo substr($content,0,480); ?></p>
                     <br class="clear">
                     <div class="userimg col-md-11 floatnone center-block">
                           <div class="test-user-img col-md-6 noPadd-lft"><?php the_post_thumbnail(); ?></div>
            	<div class="name-sec col-md-6 noPadd">
            	<h5><?php the_title(); ?></h5>
            	<span><?php the_field('user_type'); ?></span>
            	</div>
                     </div>
               
                </section>
                <div class="clear"></div>
              
            </div>    
        <?php endwhile; wp_reset_postdata(); ?>
		</div>
       </div><!--.test-con--->
    </div><!--.container-->
</div><!--.testimonial-section--->
<div class="clear"></div>
<?php get_footer(); ?>
