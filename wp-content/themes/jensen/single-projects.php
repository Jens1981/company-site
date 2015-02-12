<?php get_header(); ?>
  
  <section class="main">
    <div class="wrapper padded">
  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  	      
      <div class="project-info">
  			<h1 class="project-title"><?php the_title(); ?></h1>
        <div class="project-meta">
    			<div class="project-location">
    			  <h4>Location</h4>
    			  <p><?php the_field('project_location'); ?></p>
          </div>
    			<div class="project-date">
    			  <h4>Duration</h4>
    			  <p><?php the_field('project_date'); ?></p>
          </div>
        </div>
  			<div class="body">
  				<?php the_content(); ?>
  			</div>
      </div>
      
      <div class="project-images">
        <div class="slider">
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
            echo '<div class="project-image">';
            echo wp_get_attachment_image( $attachment->ID, 'project-image' );
            echo '<p class="image-caption">';
            echo apply_filters( 'the_title', $attachment->post_excerpt );
            echo '</p></div>';
          }
        }
        ?>
        </div>
      </div>
  	<?php endwhile; endif; ?>

    </div>
  </section>

	<?php single_post_navigation($input = 'Project'); ?>

<?php get_footer(); ?>
