<?php get_header(); ?>

  <h1 class="page-title">Testimonials</h1>

  <section class="main">
    <div class="wrapper bg-white side-padding">
  
  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  
      	<div class="testimonial">
      		<div class="testimonial-thumb">
      		  <?php
      		    $image = get_field('testimonial_image');
              if( $image ) {
              	echo '<img src="' . $image['sizes']['testimonial-thumb'] . '">';
              } else {
                echo '<span class="quote-initials">' . get_field('testimonial_name_initials') . '</span>';
              }
            ?>
      		</div>
      		<div class="testimonial-quote">
      		  <?php the_content(); ?>
      		</div>
      		<div class="testimonial-name"><?php the_field('testimonial_name'); ?> &mdash; <?php the_field('testimonial_location'); ?></div>
      	</div>
			
  		</article>
  
  	<?php endwhile; endif; ?>
  	
  	<?php testimonial_post_navigation(); ?>

    </div>
  </section>

<?php get_footer(); ?>