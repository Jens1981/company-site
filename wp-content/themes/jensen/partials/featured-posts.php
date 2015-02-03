		<section class="featured-posts">
		  <div class="wrapper padded">
  		    
		    <h2>Ecology News</h2>
		    <div class="grid">
		    <?php
		    $args = array('posts_per_page' => 3);
		    $latest_post = get_posts( $args );
		    foreach ( $latest_post as $post ) : setup_postdata( $post );
		    ?>
		      <div class="col-1-3">
          <?php
            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            if ( has_post_thumbnail() ) {
    		      echo '<article class="post" style="background-image: url(' . $url . ')">';
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
		    <?php endforeach; 
        wp_reset_postdata();?>
        </div>
        <p class="more-news"><a href="/news/" class="cta-link">More News</a></p>

		  </div>
		</section>