<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="hero">
    <div class="wrapper">
  		<?php the_field('about_hero'); ?>
    </div>
  </section>

	<section class="about-services">
	  <div class="wrapper padded">
	  
	    <h2 class="page-title">Our Services</h2>

	    <div class="grid services-grid">
        <?php
        $args = array( 'post_type' => 'services', 'posts_per_page' => -1 );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		    <div class="col-1-2">
        	<h3><?php the_title(); ?></h3>
      		<?php the_content(); ?>
		    </div>
        <?php endforeach; 
        wp_reset_postdata();?>
	    </div>

	  </div>
	</section>

	<section class="about-jens">
	  <div class="jens-image"></div>
	  <div class="jens-bio">
  		<?php the_field('about_jens'); ?>
	  </div>
	</section>

  <?php get_template_part( 'partials/contact-bar' ); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
