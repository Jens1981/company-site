<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1 class="page-title"><?php the_title(); ?></h1>

  	<section class="main">
  	  <div class="wrapper bg-white">

        <div class="body">
      		<?php the_content(); ?>
        </div>

  	  </div>
  	</section>

    <?php get_template_part( 'partials/promo-section' ); ?>

    <?php get_template_part( 'partials/featured-posts' ); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
