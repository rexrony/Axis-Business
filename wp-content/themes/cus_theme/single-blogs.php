<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div class="container">
<div class="row">
<div class="col-md-9 padleft">
    <?php	get_template_part( 'loop', 'single' );		?>
  </div>
  <div class="col-md-3 padright">
        <div class="sidebar">
          <div class="section">
            <h4>Categories</h4>
            <?php 
			$terms = get_terms( 'blog_categories' );
			echo '<ul class="cat">';
			foreach ( $terms as $term ) {
			$term_link = get_term_link( $term );
			if ( is_wp_error( $term_link ) ) {
			continue;}
			echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';}
			echo '</ul>';	
		?>
            </ul>
          </div>
          <div class="section">
            <h4>Recent Posts</h4>
            <ul class="recent">
              <?php $index_query = new WP_Query('post_type=blogs&showposts=2&order=ASC'); ?>
              <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
              <li>
                <h5> <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                  </a> </h5>
                <p>
                  <?php $content = get_the_content();
echo substr($content,0,80).'...';
 ?>
                </p>
                <div class="more"><a href="<?php the_permalink(); ?>">Read more ....</a></div>
                <?php  endwhile; wp_reset_query(); ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
  <!-- #content --> 
</div></div>
<!-- #container -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
