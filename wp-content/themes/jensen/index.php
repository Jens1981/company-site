<?php get_header(); ?>

  <h1 class="page-title">News &amp; Blog</h1>

  <section class="main">
    <div class="wrapper bg-white side-padding">
    
    <div class="filters">
			<?php wp_nav_menu( array('menu'=>'13') ); ?>
    </div>
    
  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
 
       <div class="post-date"><?php the_date(); ?></div>
 
  			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  
  			<div class="body">
  				<?php the_content(); ?>
  			</div>

				<div class="post-tags">
  				<?php the_tags( __('<span class="label">Tags:</span> ','html5reset'), ', ', ''); ?>
				</div>
				
  		</article>
  
  	<?php endwhile; ?>
  
  	<?php post_navigation(); ?>
  	
  	<div class="archive-link"><a href="/archives/">View Archive</a></div>
  
  	<?php else : ?>
  		<h2><?php _e('Nothing Found','html5reset'); ?></h2>
  	<?php endif; ?>
	
    </div>
  </section>

<?php get_footer(); ?>
