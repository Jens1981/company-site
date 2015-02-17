<?php get_header(); ?>

  <section class="main">
    <div class="wrapper padded">
  
  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  
        <p class="post-date"><?php the_date('M j, Y'); ?></p>
  			<h2 class="post-title"><?php the_title(); ?></h2>
  			<div class="post-content">
          <div class="post-share">
            <a href="http://www.facebook.com/sharer/sharer.php?u=http://jensenecology.com/<?php echo get_permalink(); ?>" target="_blank">
              <svg class="share-icon" viewBox="0 0 40 40">
                <use xlink:href="#icon-facebook"></use>
              </svg>
              <span class="share-label">Share</span>
            </a>
            <a href="http://twitter.com/share?text=Jensen Ecology - <?php the_title(); ?>">
              <svg class="share-icon" viewBox="0 0 40 40">
                <use xlink:href="#icon-twitter"></use>
              </svg>
              <span class="share-label">Tweet</span>
            </a>
            <a href="mailto:?subject=<?php the_title(); ?>&body=http://jensenecology.com/<? echo get_permalink(); ?>">
              <svg class="share-icon" viewBox="0 0 40 40">
                <use xlink:href="#icon-email"></use>
              </svg>
              <span class="share-label">Email</span>
            </a>
          </div>
    			<div class="body">
    				<?php the_content(); ?>
    			</div>
  			</div>
			
  		</article>
  	<?php endwhile; endif; ?>

    </div>
  </section>

	<?php single_post_navigation($input = 'Post'); ?>

<?php get_footer(); ?>