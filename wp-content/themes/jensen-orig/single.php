<?php get_header(); ?>

  <h1 class="page-title">News &amp; Blog</h1>

  <section class="main">
    <div class="wrapper bg-white side-padding">
  
  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  
        <div class="post-date"><?php the_date(); ?></div>
  			
  			<h2 class="entry-title"><?php the_title(); ?></h2>
  
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