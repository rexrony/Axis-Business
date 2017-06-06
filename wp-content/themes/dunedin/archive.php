<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); 
$category = get_the_category(); 
global $category;
?>
<?php if ( has_post_thumbnail() ) {?> 
<div class="featuredimg-container col-md-12 noPadd">
    <?php  echo do_shortcode(sprintf('[wp_custom_image_category term_id="%s"]',$category->term_id)); ?>
    <div class="clear"></div>
    <div class="heading-title">
        <div class="container"><h2><?php single_cat_title( ); ?></h2></div>
    </div>
    <div class="clear"></div>
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display'))
{
    bcn_display();
}?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<div class="clear"></div>
<div id="primary" class="contentarea">
    <main id="main" class="container"  role="main">
        <div class="cat-sidebar col-md-3">
            <?php $category = get_the_category(); ?>
            <section class="catbox">
                <h3>Catogeries</h3>
                <ul class="catleft">
                    <?php
                    $catID = $category[0]->cat_ID;
                    $myposts = get_posts('numberposts=5&category='.$catID);
                    foreach($myposts as $post) :
                    ?>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp; <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </section>
            <div class="clear"></div>
            <?php if(!empty($category[0]->category_description)) {?>
            <section class="cat_desc">
                <h3><?php echo $category[0]->name;?></h3>
                <section><?php echo $category[0]->category_description;?></section>
            </section>
            <?php } ?>
            <div class="clear"></div>
            <div class="cat-additional-serv">
                <h3>Additional Services</h3>
                <p> <span style="font-weight:500; color:#18007b;">Storage Container or Shipping Container Modifications</span></p>
                <p>- Roll up doors <br />
                    - Man doors <br />
                    - Windows<br />
                    - Electrical Package<br />
                    - Custom Painting<br />
                    - Custom Orders
                </p>
                <p>..just to name a few. No special
                    project is too large for us to manage.
                </p>
            </div>
        </div>
        <?php 
        global $paged; global $wp_query;
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        query_posts( $query_string . '&order=ASC&posts_per_page=3&paged='.$paged );
        if ( have_posts() ) : ?>
        <div class="content-catogary col-md-9 noPadd-rht rht">
            <?php
            // Start the Loop.
            while (have_posts() ) : the_post();
            /*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
            get_template_part( 'template-parts/content', 'catogary' );
            // End the loop.
            endwhile;
            // Previous/next page navigation.
            if(function_exists('wp_paginate')):
            wp_paginate();  
            else :
            the_posts_pagination( array(
                'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
                'next_text' => '<span class="screen-reader-text">' . __( 'Next page', '' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', '' ) . ' </span>',
            ) );
            endif;
            // If no content, include the "No posts found" template.
            else :
            get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
        </div><!-- .entry-content -->
    </main><!-- .site-main -->
</div><!-- .content-area -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
