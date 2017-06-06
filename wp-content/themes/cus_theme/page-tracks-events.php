<?php
/**
 * The template for displaying all pages.
 *
 */
get_header(); ?>
<div class="clear"></div>
<div id="primary" class="contentarea">
   <div class="heading-container">
       <div class="container">
           <div class="col-md-12 nopad pull-left">
               <?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } ?>
           </div>
 
       </div><!--.container--->
   </div><!--.heading-container--->
   <div class="clear"></div>
   
    <div class="container">
    <?php  get_template_part( 'loop', 'page' ); ?>
	<div class="clear"></div>
	       <div class="inner-cont col-md-12 noPadd">
    <?php $index_query = new WP_Query(array( 'post_type' => 'tracks', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
        <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        <div class="col-md-4 noPadd-lft post-boxes">
            <section class="post-img"><?php the_post_thumbnail(); ?></section>
            <section class="post-title"><?php the_title(); ?></section>
            <section class="post-text"> <?php the_content(); ?></section> 
        </div>

        <?php endwhile; wp_reset_postdata(); ?>
        </div><!--.mess-->
        <div class="clear"></div>
    </div>
    <!-- #container -->
</div>
<div class="clear"></div>
    <?php get_footer(); ?>