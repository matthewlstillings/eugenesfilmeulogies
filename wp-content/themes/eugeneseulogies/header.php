<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eugene\'s_Eulogies
 */

$list_preview_image = get_field('list_preview_image');


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	<meta name="description" content="" >
	<meta name="author" content="" >
	<title>Eugene's Euglogies</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?> /assets/css/bootstrap-css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?> /assets/css/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" charset="UTF-8" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?> /style.css"> 
	
	
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eugeneseulogies' ); ?></a>



<header class="page-header" role="banner">
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type=button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a class="navbar-link" href="/"><h4 class="navbar-text navbar-right navbar-review" data-id="1">eugene's<span class="logo__span review-span" data-type="1">film</span>euglogies</h4></a>
					
				</div>
				
				<?php

					require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
					wp_nav_menu([
						'menu_location' => 'primary',
						'depth' => 2,
						'container' => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'navbar',
						'menu_class' => 'nav navbar-nav navbar-right',
						'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
						'walker' => new WP_Bootstrap_Navwalker()
					]);
				?>
				

				
			</div>
		</div>
	</div>
</header>  





