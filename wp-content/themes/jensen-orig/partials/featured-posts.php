		<section class="featured-posts">
		  <div class="wrapper bg-white">
		    <div class="col-1-2 news-col">
  		    <h2>News</h2>
  		    <?php
  		    $args = array('posts_per_page' => 1, 'category' => 5);
  		    $latest_post = get_posts( $args );
  		    foreach ( $latest_post as $post ) : setup_postdata( $post ); ?>
  		      <article>
  		        <figure class="post-thumb">
  		          <a href="<?php the_permalink(); ?>">
  		            <?php
  		              if ( has_post_thumbnail() ) {
    		              the_post_thumbnail( 'news-thumb' );
    		            } else {
      		            echo '<img src="' . get_template_directory_uri() . '/assets/images/pic-blog-default.jpg">';
    		            }
  		            ?>
  		          </a>
  		        </figure>
  		        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  		        <p class="post-date"><?php the_date(); ?></p>
  		        <p class="post-teaser"><?php echo wp_trim_words( get_the_content(), 18 ) ?></p>
  		        <p><a href="/news/" class="btn">View All News</a></p>
  		      </article>
  		    <?php endforeach; 
          wp_reset_postdata();?>
        </div>
		    <div class="col-1-2 specials-col">
  		    <h2>Seasonal Specials</h2>
  		    <?php
  		    $args = array('posts_per_page' => 1, 'category' => 4);
  		    $latest_post = get_posts( $args );
  		    foreach ( $latest_post as $post ) : setup_postdata( $post ); ?>
  		      <article>
  		        <figure class="post-thumb">
  		          <a href="<?php the_permalink(); ?>">
  		            <?php
  		              if ( has_post_thumbnail() ) {
    		              the_post_thumbnail( 'news-thumb' );
    		            } else {
      		            echo '<img src="' . get_template_directory_uri() . '/assets/images/pic-blog-default.jpg">';
    		            }
  		            ?>
  		          </a>
  		        </figure>
  		        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  		        <p class="post-date"><?php the_date(); ?></p>
  		        <p class="post-teaser"><?php echo wp_trim_words( get_the_content(), 18 ) ?></p>
  		        <p><a href="/category/seasonal-specials/" class="btn">View All Specials</a></p>
  		      </article>
  		    <?php endforeach; 
          wp_reset_postdata();?>
        </div>
		  </div>
		</section>
