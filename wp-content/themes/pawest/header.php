<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title( '&mdash;', true, 'right' ); ?></title>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<meta name="author" content="Nathaniel Buck" />
		<meta name="description" content="Pennsylvania West Soccer Referees" />

		<meta name="viewport" content="initial-scale=1">

<!--
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
-->

		<script src="//use.typekit.net/wzl0fpj.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

		<link rel="stylesheet/less" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/pawest/css/screen.less" />

		<script src="<?php echo site_url(); ?>/wp-content/themes/pawest/js/less.2.5.0.min.js" type="text/javascript"></script>

		<!--<?php //wp_head(); ?>-->
	</head>

	<body <?php body_class(); ?>>
			<header role="banner">
				<div class="page-container">
					<a class="home-link"
						href="<?php echo esc_url( home_url( '/' ) ); ?>"
						title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

						<h1 class="logo"><img src="<?php echo site_url(); ?>/wp-content/themes/pawest/img/logo.gif" alt="<?php bloginfo( 'name' ); ?>"/></h1>
						<h2 class="logo-subtitle"><?php bloginfo( 'description' ); ?></h2>
					</a>
				</div>

				<nav class="navigation" role="navigation">
					<?php wp_nav_menu(array(
						'theme_location' => 'primary',
						'container' => false
					)); ?>
				</nav>
			</header>
<!--
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav>
			</div>
		</header>
-->

		<section class="content">
