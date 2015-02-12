<?php get_header(); ?>

  <section class="main">
    <div class="wrapper padded">
  
  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  
        <p class="post-date"><?php the_date('M j, Y'); ?></p>
  			<h2 class="post-title"><?php the_title(); ?></h2>
  			<div class="body">
  				<?php the_content(); ?>
  			</div>
			
  		</article>
  	<?php endwhile; endif; ?>

    </div>
  </section>

	<?php single_post_navigation($input = 'Post'); ?>

<?php get_footer(); ?>