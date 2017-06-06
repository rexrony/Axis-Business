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

	<main id="main" class="container" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			//get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->
	<div class="class_container col-md-12">
    <div class="container">
      <div class="heading-title">
          <h2>Classes</h2>
      </div>
 
           <div class="clear"></div>
        <div class="classes_tabby">
            <ul class="tabs-menu">
<?php $tab_count = 1; $index_query = new WP_Query(array('post_type' => 'club_classes', 'posts_per_page' => 10,'order' =>'ASC')); ?>
<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
      
        <li <?php if($tab_count == 1){?>class="current"<?php } ?>><a href="#tab-<?php echo $tab_count;?>"><?php the_title(); ?></a></li>
<?php $tab_count++; endwhile; ?>
         </ul>
            <div class="clear"></div>
            <div class="tab">
          <?php $tab_count = 1; $index_query = new WP_Query(array('post_type' => 'club_classes', 'posts_per_page' => 10,'order' =>'ASC')); ?>
<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        <div id="tab-<?php echo $tab_count;?>" class="tab-content">
         <div class="col-md-4 noPadd-lft"><?php the_post_thumbnail(); ?></div>
         <div class="col-md-8 noPadd-rht tabs-conts">
         <div class="col-md-6 noPadd pst-title"><h2><?php the_title(); ?></h2></div>
         <div class="col-md-4 noPadd pst-dates rht"><i class="fa fa-calendar" aria-hidden="true"></i>  <?php echo get_the_date('F d, Y'); ?> &nbsp; &nbsp; <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date('g:i a'); ?>  </div>
         <div class="clear"></div>
         <section class="pst-tab-con"><?php the_content();?></section>
         <section class="readmore-tabs col-">
             <a class="jn-class" href="#">Join This Class</a>
             <a class="rd-mre" href="#_">Read More</a>
         </section>
         </div>
        </div>
         <?php $tab_count++; endwhile; ?>        
    </div>
    
        </div><!--.classes_tabby-->
    </div><!--.container--->
</div><!--.used_container--->
<div class="clear"></div>
<div class="membership_container">
<div class="container">
       <div class="heading-title">
          <h2>Join  Our Classes</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel dictum sem. Suspendisse euismod laoreet accumsan.<br> Phasellus porta nunc facilisis, finibus nisi in, placerat justo. S</p>
      </div>
      <div class="clear"></div>
      <br>
    <?php echo do_shortcode('[contact-form-7 id="36" title="Join Classes Form"]'); ?>
</div><!--.container--->
</div><!--.membership_container--->
<div class="clear"></div>
<div class="maps-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d90616.50933935905!2d-108.5659306217946!3d44.785577380435086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53495dd129968dd1%3A0xea55931bca8a8790!2s1174+Rd+7%2C+Lovell%2C+WY+82431!5e0!3m2!1sen!2s!4v1492440646028" frameborder="0" allowfullscreen></iframe>
</div>
</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
