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
  <script>try{Typekit.load();}catch(e){}</script>	<?php wp_head(); ?>
	<!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
  <![endif]-->
</head>
<body <?php body_class(); ?>>
	<div class="container">

		<header class="header">
		  <div class="wrapper">
  			<div class="logo">
  			  <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Culinary Care"></a>
          </div>
		  </div>
		</header>

		<nav class="main-nav">
		  <div class="wrapper">
		  
        <a href="" class="btn-mobile">
          <span class="icon-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </span>
        </a>
  			<?php wp_nav_menu( array('menu'=>'2') ); ?>
  			
  			<div class="phone-block">
  			  <div class="phone-number"><span class="mobile-label">Schedule an Appointment</span>(630) 455-9015</div>
  			  <a href="" class="btn-appointment open-modal">Schedule an Appointment</a>
  			</div>
			
		  </div>
		</nav>
