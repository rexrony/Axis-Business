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
        <?php  //get_template_part( 'loop', 'page' );			?>
<div class="jews-tabbing col-md-12 noPadd">
    <ul class="tabs-left col-md-3 noPadd-lft">
    <?php $post_count = 1; $index_query = new WP_Query(array( 'post_type' => 'our_services', 'posts_per_page' => -1,'order'=>'ASC' )); ?>
      <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        <li class="<?php if($post_count == 1){?>current<?php } ?>"><a href="#tabs<?php echo $post_count; ?>"><?php the_title(); ?><span class="dashicons dashicons-arrow-right-alt2 rht"></span>
        </a></li>
        <?php  $post_count++; endwhile; wp_reset_postdata(); ?>
    </ul>
    <div class="tab-loop col-md-9 noPadd-rht rht">
           <?php $post_count = 1; $index_query = new WP_Query(array( 'post_type' => 'our_services', 'posts_per_page' => -1,'order'=>'ASC' )); ?>
      <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        <div id="tabs<?php echo $post_count; ?>" class="tabsleft-content">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
        <?php  $post_count++; endwhile; wp_reset_postdata(); ?>
        
    </div>
 
   </div><!--.jews-tabbing--->
        <!-- #content -->
    </div>
    <div class="clear"></div>
   
    <!-- #container -->
</div>
<div class="clear"></div>
    <?php get_footer(); ?>