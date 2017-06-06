<?php
/**
 * Template Name: Sechdule Page
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
<section class="section">
<div id="tabs-container">
    <ul class="tabs-menu">
        <li class="current"><a href="#tab-1">Monday</a></li>
        <li><a href="#tab-2">Tuesday</a></li>
        <li><a href="#tab-3">Wednesday</a></li>
        <li><a href="#tab-4">Thursday</a></li>
        <li><a href="#tab-5">Friday</a></li>
        <li><a href="#tab-6">Saturday</a></li>
        <li><a href="#tab-7">Sunday</a></li>
    </ul>
    <div class="tab">
        <div id="tab-1" class="tab-content">
        <table class="tablehead">
            <tr>
                <th>Time</th>
                <th>Age Group</th>
                <th>Description</th>
                <th>Venue</th>
            </tr>
        </table>
    <?php if( get_field('monday') ): ?>
	<?php echo the_field('monday');?>
	<?php endif; ?>
            
        </div>
        <div id="tab-2" class="tab-content">
          <table class="tablehead">
            <tr>
                <th>Time</th>
                <th>Age Group</th>
                <th>Description</th>
                <th>Venue</th>
            </tr>
        </table>
   <?php if( get_field('tuesday') ): ?>
	<?php echo the_field('tuesday');?>
	<?php endif; ?>
        </div>
        <div id="tab-3" class="tab-content">
        <table class="tablehead">
            <tr>
                <th>Time</th>
                <th>Age Group</th>
                <th>Description</th>
                <th>Venue</th>
            </tr>
        </table>
   <?php if( get_field('wednesday') ): ?>
	<?php echo the_field('wednesday');?>
	<?php endif; ?>
        </div>
        <div id="tab-4" class="tab-content">
               <table class="tablehead">
            <tr>
                <th>Time</th>
                <th>Age Group</th>
                <th>Description</th>
                <th>Venue</th>
            </tr>
        </table>
   <?php if( get_field('thursday') ): ?>
	<?php echo the_field('thursday');?>
	<?php endif; ?>
        </div>
          <div id="tab-5" class="tab-content">
                  <table class="tablehead">
            <tr>
                <th>Time</th>
                <th>Age Group</th>
                <th>Description</th>
                <th>Venue</th>
            </tr>
        </table>
   <?php if( get_field('friday') ): ?>
	<?php echo the_field('friday');?>
	<?php endif; ?>
        </div>
          <div id="tab-6" class="tab-content">
                  <table class="tablehead">
            <tr>
                <th>Time</th>
                <th>Age Group</th>
                <th>Description</th>
                <th>Venue</th>
            </tr>
        </table>
   <?php if( get_field('saturday') ): ?>
	<?php echo the_field('saturday');?>
	<?php endif; ?>
        </div>
          <div id="tab-7" class="tab-content">
                 <table class="tablehead">
            <tr>
                <th>Time</th>
                <th>Age Group</th>
                <th>Description</th>
                <th>Venue</th>
            </tr>
        </table>
   <?php if( get_field('sunday') ): ?>
	<?php echo the_field('sunday');?>
	<?php endif; ?>
        </div>
      
    </div>
</div>
</section>

	</main><!-- .site-main -->
        
</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
