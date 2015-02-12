<?php get_header(); ?>

  <section class="main">
    <div class="wrapper padded">
  
      <h1 class="page-title">Ecology News</h1>
      
      <div class="grid posts-grid">
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-1-3">
        <?php
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_image_src($image_id, 'news-thumb', true);
          if ( has_post_thumbnail() ) {
  		      echo '<article class="post" style="background-image: url(' . $image_url[0] . ')">';
          } else {
            echo '<article class="post">';
          }
        ?>
            <a href="<?php the_permalink(); ?>">
  		        <p class="post-date"><?php the_date('M j, Y'); ?></p>
  		        <h3 class="post-title"><?php the_title(); ?></h3>
            </a>
  	      </article>
        </div>
    	<?php endwhile; ?>
    	</div>

    </div>
  </section>

	<?php post_navigation(); ?>
  
	<?php endif; ?>

  <?php get_template_part( 'partials/contact-bar' ); ?>
	
<?php get_footer(); ?>