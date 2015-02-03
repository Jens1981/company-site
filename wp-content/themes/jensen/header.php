<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="icon" type="image/png" href="/favicon.png">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
  <script src="//use.typekit.net/bmr5zua.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <?php wp_head(); ?>
	<!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
  <![endif]-->
</head>
<body <?php body_class(); ?>>
	<div class="container">

		<header class="header">
		  <div class="wrapper">
  			<div class="logo">
  			  <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt="Culinary Care"></a>
        </div>
    		<nav class="main-nav">
          <a href="" class="btn-mobile">
            <span class="icon-menu">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </span>
            <span class="menu-label">Menu</span>
          </a>
    			<?php wp_nav_menu( array('menu'=>'2') ); ?>
    		</nav>
		  </div>
		</header>

