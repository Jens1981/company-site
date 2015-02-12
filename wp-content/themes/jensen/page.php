<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<section class="main">
  	  <div class="wrapper padded">

    		<h1 class="page-title"><?php the_title(); ?></h1>
        <div class="body">
      		<?php the_content(); ?>
        </div>

  	  </div>
  	</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
