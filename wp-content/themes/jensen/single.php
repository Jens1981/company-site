<?php get_header(); ?>

  <section class="hero">
    <div class="wrapper">
      <h1 class="page-title">Ecology News</h1>
    </div>
  </section>

  <section class="main">
    <div class="wrapper bg-white side-padding">
  
  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  
        <p class="post-date"><?php the_date('M j, Y'); ?></p>
  			<h2 class="post-title"><?php the_title(); ?></h2>
  			<div class="body">
  				<?php the_content(); ?>
  				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>  				
  				<div class="post-tags">
    				<?php the_tags( __('<span class="label">Tags:</span> ','html5reset'), ', ', ''); ?>
  				</div>
  			</div>
			
  		</article>
  
  	<?php endwhile; endif; ?>
  	
  	<?php single_post_navigation(); ?>

    </div>
  </section>

<?php get_footer(); ?>