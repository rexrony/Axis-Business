<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header(); ?>
<div class="clear"></div>
<div class="featuredimg-container col-md-12 noPadd">
<?php if ( has_post_thumbnail()) {?> 
     <?php the_post_thumbnail();  ?>
<?php } else { ?>
<img src="<?php bloginfo( 'template_url' ); ?>/images/feat-img.jpg" alt="">
<?php } ?>
    <div class="clear"></div>
    <div class="heading-title-feat">
        <div class="container"><h2><?php the_title(); ?></h2></div>
    </div>
</div>

<div class="clear"></div>
<div id="primary" class="contentarea">
   <div class="container">
        <?php  get_template_part( 'loop', 'page' );			?>
        <!-- #content -->
    </div><!-- #container -->
   
</div>
<div class="clear"></div>
<div class="why_choose">
     <div class="container">
        <section><p>Focus on delivering results every step of the way is fostered with <br>
actionable plans,  and checkpoints.</p></section>
     </div>
 </div>
<div class="clear"></div> 
<div class="why_choose_container">
    <div class="container">
        <div class="heading-title">
            <h2>Why Choose Us</h2>
        </div>
        <div class="clear"></div>
    <div class="col-md-4 why-box">
        <section>
            <h4>Lorem ipsum dolor sit amet ipsum </h4>
            <p>Quo cu utroque inermis. Cu duo mucius patrioque appellantur, ad causae periculis per. Iudico laoreet eligendi ei nam, sit an deserunt tincidunt democritum. At has magna sensibus, insolens deseruisse cont entiones no quo. Soluta inimicus mea id. Ex qui ignota possit. Duo sumo legimus scribentur ut. Soluta elaboraret mel id. In eam animal repudiare</p>
        </section>
    </div>
    <div class="col-md-4 why-box">
        <section>
            <h4>Lorem ipsum dolor sit amet ipsum </h4>
            <p>Quo cu utroque inermis. Cu duo mucius patrioque appellantur, ad causae periculis per. Iudico laoreet eligendi ei nam, sit an deserunt tincidunt democritum. At has magna sensibus, insolens deseruisse cont entiones no quo. Soluta inimicus mea id. Ex qui ignota possit. Duo sumo legimus scribentur ut. Soluta elaboraret mel id. In eam animal repudiare</p>
        </section>
    </div>
    <div class="col-md-4 why-box">
        <section>
            <h4>Lorem ipsum dolor sit amet ipsum </h4>
            <p>Quo cu utroque inermis. Cu duo mucius patrioque appellantur, ad causae periculis per. Iudico laoreet eligendi ei nam, sit an deserunt tincidunt democritum. At has magna sensibus, insolens deseruisse cont entiones no quo. Soluta inimicus mea id. Ex qui ignota possit. Duo sumo legimus scribentur ut. Soluta elaboraret mel id. In eam animal repudiare</p>
        </section>
    </div>
    </div>
</div>
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