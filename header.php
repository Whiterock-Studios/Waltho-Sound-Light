<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php the_title(); echo " | "; bloginfo('name');?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/main.css">
	<link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
	<section class="container">
		<div id="header-logo" class="pull-left">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Waltho Sound & Light Logo">
			</a>
		</div>
		<nav id="main-menu" class="pull-right">
			<div id="burger">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="menus">
				<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'social_menu' ) ); ?>
			</div>
		</nav>
	</section>
</header>
<main>