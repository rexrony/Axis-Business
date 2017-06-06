<?php
/**
 * The template for displaying pages
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
<!---
    <div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php /*if(function_exists('bcn_display'))
    {
        bcn_display();
    }*/ ?>
</div>
    </div>
</div>
--->


<div class="featuredimg-container col-md-12 noPadd">
<?php if ( has_post_thumbnail()) {?> 
     <?php the_post_thumbnail();  ?>
<?php } else { ?>
<img src="<?php bloginfo( 'template_url' ); ?>/images/feat-img.png" alt="">
<?php } ?>
    <div class="clear"></div>
    <div class="heading-title-feat">
        <div class="container"><h2><?php the_title(); ?></h2></div>
    </div>
</div>

<div class="clear"></div>


<div id="primary" class="contentarea">
<div class="inner-content2">

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
		 <div class="heading-title">
          <h2><?php the_title(); ?></h2>
      </div>
      <div class="clear"></div>
 <div class="facility-posts col-md-10 floatnone center-block">
  <?php $index_query = new WP_Query(array('post_type' => 'facilities_post', 'posts_per_page' => 10,'order' => 'ASC')); ?>
  <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
  <div class="facility-box col-md-6 noPadd-lft">
      <section>
         <div class="col-md-5 noPadd-lft">
             <?php the_post_thumbnail(); ?>
         </div>
          <div class="col-md-6 noPadd">
              
          <h5><?php the_title(); ?></h5>
          <?php echo wp_trim_words( get_the_content(), 17, '...' );?>
          </div>
      </section>
  </div>
  <?php endwhile; ?>
  </div><!--.mem-posts--->
	</main><!-- .site-main -->
    </div>
<div class="clear"></div>
<div class="maps-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d90616.50933935905!2d-108.5659306217946!3d44.785577380435086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53495dd129968dd1%3A0xea55931bca8a8790!2s1174+Rd+7%2C+Lovell%2C+WY+82431!5e0!3m2!1sen!2s!4v1492440646028" frameborder="0" allowfullscreen></iframe>
</div>
</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
