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
<img src="<?php bloginfo( 'template_url' ); ?>/images/feat-img.jpg" alt="">
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

	</main><!-- .site-main -->
    </div>
<div class="clear"></div>
<div class="best_container">
        <div class="col-md-6 noPadd">
         <div class="col-md-12 noPadd">
          <div class="content-pad2"><h4>OUR MISSION</h4>
          <section>
             Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat pat wisi enim ad minim veniam, quis nostrud exerci tation u
          </section>
          </div>
         </div>
         <div class="col-md-12 noPadd">
          <div class="content-pad2"><h4>OUR VISION</h4>
          <section>
             Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat pat wisi enim ad minim veniam, quis nostrud exerci tation u
          </section>
          </div>
         </div>
         </div>
       <?php $index_query = new WP_Query(array('post_type' => 'best_at', 'posts_per_page' => 1)); ?>
 <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        <div class="col-md-6 noPadd">
          <div class="at-img">
             <img src="<?php the_post_thumbnail_url('full'); ?>" alt=""  />  
          </div>
        </div>
        <?php endwhile; ?>
   
</div><!--.best_container--->
</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
