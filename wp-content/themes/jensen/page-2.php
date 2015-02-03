<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<section class="hero">
		  <div class="wrapper">
  			<?php the_field('hero'); ?>
		  </div>
		</section>

		<section class="home-services">
		  <div class="wrapper padded">
		  
		    <div class="grid">
  		    <div class="col-1-3 services-content">
      			<?php the_field('services'); ?>
  		    </div>
  		    <div class="col-2-3 services-list">
            <?php
            $args = array( 'post_type' => 'services', 'posts_per_page' => -1 );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            	<h3 class="service"><?php the_title(); ?></h3>
            <?php endforeach; 
            wp_reset_postdata();?>
  		    </div>
		    </div>
		    
		  </div>
		</section>

    <?php get_template_part( 'partials/featured-posts' ); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>