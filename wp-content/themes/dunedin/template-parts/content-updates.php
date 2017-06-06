<?php
/**
 * Template Name: Updates Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="featuredimg-container col-md-12 noPadd">
<?php if ( has_post_thumbnail()) {?> 
     <?php the_post_thumbnail();  ?>
<?php } else { ?>
<img src="<?php bloginfo( 'template_url' ); ?>/images/feat-backgrnd.png" alt="">
<?php } ?>
    <div class="clear"></div>
    <div class="heading-title">
        <div class="container"><h2><?php the_title(); ?></h2></div>
    </div>
</div>

<div class="clear"></div>
<div id="primary" class="contentarea">
	<main id="main" class="container" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
<div class="updte-slides">
  <!-- Large Slide -->
  <div class="item-slider col-md-9">
        <?php $index_query = new WP_Query(array( 'post_type' => 'news_updates', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
        <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
    		<div class="slick-slider-item lft"> <?php the_post_thumbnail( 'full', array( 'class' => 'avatar' ) ); ?>
       <section class="v-slide-caption">
          <div class="v-slide-container">
              <small><?php echo get_the_date(); ?></small>
               <h5><?php the_title(); ?></h5>
               <section><?php the_content(); ?></section>
               <p><a href="<?php the_permalink(); ?>">Read More</a></p>
          </div>          
       </section>
         </div>
        <?php endwhile; wp_reset_postdata(); ?>
  </div>
  <!-- Thumb Slides --> 
  <div class="thumb-slider col-md-3 rht">
	    <?php $index_query = new WP_Query(array( 'post_type' => 'news_updates', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
      	<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
		 <div class="col-md-3 noPadd caption-boxes">
   <p><small><?php echo get_the_date('d-F-Y'); ?></small></p>
   <p><?php the_title(); ?></p>
  
    <section>
        <p><?php the_title(); ?></p>
        <img src="<?php bloginfo( 'template_url' ); ?>/images/readmre.png" alt="">
    </section>
</div>
    	<?php endwhile; wp_reset_postdata(); ?>
    <!--/slick-slider-item-->
  </div>
</div><!--.updte-slides--->


	</main><!-- .site-main -->
        
</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
