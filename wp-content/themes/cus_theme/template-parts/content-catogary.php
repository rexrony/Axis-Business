<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


	<div class="col-md-12 cat_posts noPadd">
	<section class="col-md-5 noPadd cat_imgs"><?php the_post_thumbnail('cat-thumb'); ?></section>
	<section class="content-cat-rht col-md-7 noPadd rht">
	<div class="cat-post-title">
	    <p><?php the_title(); ?></p>
	</div>
	<div class="clear"></div>
	<div class="cat-post-text">
	    <?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div>
	<?php if( get_field('contaner_tags') ): ?>
	<div class="cat_tag">
	<span><?php the_field('contaner_tags'); ?></span>
	</div>
        <?php endif; ?>
	</section>
	
</div>