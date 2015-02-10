<?php

	// Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function jensen_setup() {
		load_theme_textdomain( 'stadtler', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
		register_nav_menu( 'primary', __( 'Navigation Menu', 'stadtler' ) );
		add_theme_support( 'post-thumbnails' );
	}
	add_action( 'after_setup_theme', 'jensen_setup' );

	// Scripts & Styles (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function jensen_scripts_styles() {
		global $wp_styles;

		// Load IE Stylesheet.
//		wp_enqueue_style( 'stadtler-ie', get_template_directory_uri() . '/css/ie.css', array( 'stadtler-style' ), '20130213' );
//		$wp_styles->add_data( 'stadtler-ie', 'conditional', 'lt IE 9' );

	}
	add_action( 'wp_enqueue_scripts', 'jensen_scripts_styles' );

	// Services Post Type
	add_action('init', 'services_register');
  function services_register() {
  	$labels = array(
  		'name' => _x('Services', 'post type general name'),
  		'singular_name' => _x('Services Item', 'post type singular name'),
  		'add_new' => _x('Add New', 'Services Item'),
  		'add_new_item' => __('Add New Services Item'),
  		'edit_item' => __('Edit Services Item'),
  		'new_item' => __('New Services Item'),
  		'view_item' => __('View Services Item'),
  		'search_items' => __('Search Services'),
  		'not_found' =>  __('Nothing found'),
  		'not_found_in_trash' => __('Nothing found in Trash'),
  		'parent_item_colon' => ''
  	);
  	$args = array(
  		'labels' => $labels,
  		'public' => true,
  		'publicly_queryable' => true,
  		'show_ui' => true,
  		'query_var' => true,
  		'menu_icon' => 'dashicons-hammer',
  		'rewrite' => true,
  		'capability_type' => 'post',
  		'hierarchical' => false,
  		'menu_position' => null,
  		'supports' => array('title','editor','thumbnail')
  	  ); 
  	register_post_type( 'services' , $args );
  }
  
  // Projects Post Type
	add_action('init', 'projects_register');
  function projects_register() {
  	$labels = array(
  		'name' => _x('Projects', 'post type general name'),
  		'singular_name' => _x('Projects Item', 'post type singular name'),
  		'add_new' => _x('Add New', 'Projects Item'),
  		'add_new_item' => __('Add New Projects Item'),
  		'edit_item' => __('Edit Projects Item'),
  		'new_item' => __('New Projects Item'),
  		'view_item' => __('View Projects Item'),
  		'search_items' => __('Search Projects'),
  		'not_found' =>  __('Nothing found'),
  		'not_found_in_trash' => __('Nothing found in Trash'),
  		'parent_item_colon' => ''
  	);
  	$args = array(
  		'labels' => $labels,
  		'public' => true,
  		'publicly_queryable' => true,
  		'show_ui' => true,
  		'query_var' => true,
  		'menu_icon' => 'dashicons-carrot',
  		'rewrite' => true,
  		'capability_type' => 'post',
  		'hierarchical' => false,
  		'menu_position' => null,
  		'supports' => array('title','editor','thumbnail')
  	  ); 
  	register_post_type( 'projects' , $args );
  }
  
	// WP Title (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function jensen_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() )
			return $title;

//		 Add the site name.
		$title .= get_bloginfo( 'name' );

//		 Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";

//		 Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'stadtler' ), max( $paged, $page ) );

		return $title;
	}
	add_filter( 'wp_title', 'jensen_wp_title', 10, 2 );


//OLD STUFF BELOW

	// Load jQuery
	if ( !function_exists( 'core_mods' ) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', ( "http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ), false);
				wp_enqueue_script( 'jquery' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'core_mods' );
	}

	// Clean up the <head>, if you so desire.
	function removeHeadJunk() {
	  remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
	}
	add_action('init', 'removeHeadJunk');

	// Clean Up Menu Classes
	function nav_class_filter( $var ) {
    return is_array($var) ? array_intersect($var, array('current-menu-item', 'current-menu-parent', 'current-menu-ancestor')) : '';
  }
  add_filter('nav_menu_css_class', 'nav_class_filter', 100, 1);

	// Custom Menu
	register_nav_menu( 'primary', __( 'Navigation Menu', 'stadtler' ) );

	// Navigation 
	function post_navigation() {
	  $prev_page = get_previous_posts_link('Previous Page');
	  $next_page = get_next_posts_link('Next Page');
		echo '<div class="posts-nav">';
	  if ($prev_page) {
  	  echo $prev_page;
	  } else {
  	  echo '<span class="nav-item">Previous Page</span>';
	  }
	  if ($next_page) {
  	  echo $next_page;
	  } else {
  	  echo '<span class="nav-item">Next Page</span>';
	  }
		echo '</div>';
	}
	
  // Single Navigation
	function single_post_navigation($input) {
	  $prev_post = get_previous_post();
	  $next_post = get_next_post();
		echo '<div class="posts-nav">';
	  if ($prev_post) {
  	  echo '<a href="'.get_permalink( $prev_post->ID ).'">Previous '. $input .'</a>';
	  } else {
  	  echo '<span class="nav-item">Previous '. $input .'</span>';
	  }
	  if ($next_post) {
  	  echo '<a href="'.get_permalink( $next_post->ID ).'">Next '. $input .'</a>';
	  } else {
  	  echo '<span class="nav-item">Next '. $input .'</span>';
	  }
		echo '</div>';
	}
	
	// Posted On
	function posted_on() {
		printf( __( '<span class="sep">Posted </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a> by <span class="byline author vcard">%5$s</span>', '' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_author() )
		);
	}
	
	// Attachment Figures
	function html5_insert_image($html, $id, $caption, $title, $align, $url, $size) {
	  $src  = wp_get_attachment_image_src( $id, $size, false );
    $html5 = "<figure id='post-$id media-$id' class='align-$align'>";
    $html5 .= "<img src='$src[0]' alt='$title' />";
    if ($caption) {
      $html5 .= "<figcaption>$caption</figcaption>";
    }
    $html5 .= "</figure>";
    return $html5;
  }
  add_filter( 'image_send_to_editor', 'html5_insert_image', 10, 9 );
	
	// Image Sizes
	add_image_size( 'news-thumb', 376, 240, true );
	add_image_size( 'blog-image', 620 );
	add_image_size( 'project-thumb', 376, 240, true );
	add_image_size( 'project-image', 792, 432, true );

  add_filter( 'image_size_names_choose', 'my_custom_sizes' );
  function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
      'blog-image' => __('Blog Image'),
    ));
  }

?>
