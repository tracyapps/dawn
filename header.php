<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">

	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- If Site Icon isn't set in customizer -->
	<?php if ( !function_exists( 'has_site_icon' ) || !has_site_icon() ) { ?>
		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon"/>
		<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	<?php } ?>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php include( 'assets/css/variables/theme-default.php' ); ?>
	<?php include( 'assets/css/variables/theme-custom.php' ); ?>
	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

<header class="site-header" role="banner">
	<div class="header-color-bar">
		<div class="mobile-menu-toggle">
			<a href="#" id="toggle">
				<svg class="icon-navigation-dims">
					<use xlink:href="#navigation"></use>
				</svg>
				Menu
			</a>
		</div>
	</div>
	<div class="mobile-main-navigation">
		<?php start_mobile_nav(); ?>
	</div>
	<div class="site-logo">
		<div class="logo-text-container">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span><?php echo get_bloginfo( 'name' ); ?></span></a></h1>
			<div id="site-tagline-container">
				<span class="before"></span>
				<div class="site-tagline"><?php esc_html_e( get_bloginfo( 'description' ) ); ?></div>
				<span class="after"></span>
			</div>
		</div>
	</div>
	<div class="main-navigation">
		<?php start_top_nav(); ?>
	</div>
	<div class="logomark-container" aria-hidden="true">
		<?php include( 'parts/dawn-logomark.php' ); ?>
	</div>
</header> <!-- / .site-header -->
<div class="site-content">
	<div class="blending-div"> </div>