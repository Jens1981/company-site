<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<section class="hero">
			<?php // the_field('home_hero_1'); ?>
		</section>
		
		<section class="home-services">
		  <div class="wrapper">
		    <h2>Our Services</h2>
  			<?php // the_field('home_services_intro'); ?>
		  </div>
		</section>

    <?php // get_template_part( 'partials/featured-posts' ); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>