<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autismtoday
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" des content="width=device-width, initial-scale=1">
	<meta name="description" content="The Autism Today Foundation helps individuals find their strengths, gifts and talents and teaches the world to better see and appreciate the value of every human being.">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'autismtoday'); ?></a>

		<header id="masthead" class="site-header custom-site-header">
			<div class="header-container">
				<div class="full-logo">
					<?php if (!has_custom_logo()) { ?>
						<?php if (is_front_page() && is_home()) : ?>
							<a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>
						<?php else : ?>
							<a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>
						<?php endif; ?>
					<?php } else {
						the_custom_logo();
					}
					?>
				</div>
				<!-- end of full logo -->

				<!-- mobile logo -->
				<div class="header-mobile">
					<a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">
						<img src="<?php bloginfo('template_directory'); ?>/assets/img/autism-today-logo-mobile.svg" alt="<?php the_title(); ?>">
						<span class="sr-only"><?php bloginfo('name'); ?></span>
					</a>

					<!-- navbar-toggler and donate -->
					<div class="header-combo">
						<button class="donate-button">DONATE</button>
						<div class="toggle-icon">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<!-- end of mobile logo -->
				</div>

				<!-- navigation -->
				<nav>
					<?php
					wp_nav_menu(
						array(
							'theme_location'			=>			'main-menu',
							'menu_class'					=>			'main-menu',
							'menu_id'							=>			'main-menu',
							'fallback_cb'					=>			''
						)
					);
					?>
				</nav>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">