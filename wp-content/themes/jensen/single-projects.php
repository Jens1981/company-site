<?php get_header(); ?>

  <section class="hero">
    <div class="wrapper">
      <h1 class="page-title">Our Work</h1>
    </div>
  </section>

  <section class="main">
    <div class="wrapper bg-white side-padding">
  
  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
      <p class="post-date"><?php the_date('M j, Y'); ?></p>
			<h2 class="post-title"><?php the_title(); ?></h2>
			<div class="body">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>  				
				<div class="post-tags">
  				<?php the_tags( __('<span class="label">Tags:</span> ','html5reset'), ', ', ''); ?>
				</div>
			</div>

      <?php
      $args = array(
       'post_type' => 'attachment',
       'numberposts' => -1,
       'post_status' => null,
       'post_parent' => $post->ID
      );
    
      $attachments = get_posts( $args );
      if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
          echo '<li>';
          echo wp_get_attachment_image( $attachment->ID, 'full' );
          echo '<p>';
          echo apply_filters( 'the_title', $attachment->post_excerpt );
          echo '</p></li>';
        }
      }
      ?>
        
  	<?php endwhile; endif; ?>
  	
  	<?php single_post_navigation(); ?>

    </div>
  </section>

<?php get_footer(); ?>