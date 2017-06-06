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
        
	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
