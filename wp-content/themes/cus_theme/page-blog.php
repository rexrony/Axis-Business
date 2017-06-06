<?php
/**
 Template Name: Blog
 */

get_header(); ?>

<blog>
  <div class="container">
    <div class="row">
      <div class="col-md-9 nopad blogs">
        <?php
$wp_query->query(array( 'post_type' => 'blogs', 'posts_per_page' => 2,'paged' => $paged,'order'=>'DESC' ));
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="loop">
          <div class="col-md-4 padleft"> <a href="<?php the_permalink(); ?>" >
            <?php the_post_thumbnail( 'medium' ); ?>
            </a> </div>
          <div class="col-md-8 padleft">
            <h3 class="title"><a href="<?php the_permalink(); ?>" >
              <?php the_title(); ?>
              </a></h3>
            <small>
            <?php the_time('F j, Y'); ?>
            </small>
            <p>
              <?php $content=get_the_content(); echo substr($content,0, 300); ?>
            </p>
            <div class="more"><a href="<?php the_permalink(); ?>" >Read More ... </a></div>
            <div class="meta"> <span>Author <strong>
              <?php the_author(); ?>
              </strong></span> <span class="comments">
              <?php comments_number( '0', '1', '%' ); ?> Comment(s)
              </span> </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages);} ?>
        <?php endif; ?>
      </div>
      <div class="col-md-3 padright">
        <div class="sidebar">
          <categories>
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
		?></div>

          </categories>
          <recentposts>
            <div class="section">
              <h4>Recent Posts</h4>
              <ul class="recent">
                <?php $index_query = new WP_Query(array( 'post_type' => 'blogs', 'posts_per_page' => 2,'order'=>'DESC' )); ?>
                <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
                <li>
                  <h5> <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a> </h5>
                  <p>
                    <?php $content = get_the_content(); echo substr($content,0,80).'...'; ?>
                  </p>
                  <div class="more"><a href="<?php the_permalink(); ?>">Read more ....</a></div>
                </li>
                <?php  endwhile; wp_reset_query(); ?>
              </ul>
            </div>
          </recentposts>
        </div>
      </div>
    </div>
  </div>
</blog>
</section>
<?php get_footer(); ?>
