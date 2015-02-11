<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<section class="our-work">
	  <div class="wrapper padded">
	  
	    <h1 class="page-title"><?php the_title(); ?></h1>
	    <?php the_content(); ?>

	    <div class="grid work-grid">
		    <?php
		    $args = array('post_type' => 'projects', 'posts_per_page' => 9);
		    $latest_post = get_posts( $args );
		    foreach ( $latest_post as $post ) : setup_postdata( $post );
		    ?>
		      <div class="col-1-3">
          <?php
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, 'project-thumb', true);
            if ( has_post_thumbnail() ) {
    		      echo '<div class="project-block" style="background-image: url(' . $image_url[0] . ')">';
            } else {
              echo '<div class="project-block">';
            }
          ?>
		          <a href="<?php the_permalink(); ?>">
    		        <h3 class="project-title"><?php the_title(); ?></h3>
		          </a>
  		      </div>
		      </div>
		    <?php endforeach; 
        wp_reset_postdata();?>
	    </div>

	  </div>
	</section>
	
  <?php get_template_part( 'partials/contact-bar' ); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
