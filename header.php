<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portabello
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mm4' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portabello-logo.svg" alt="Portabello Apartments logo"></a>

			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'mm4' ); ?></button>
			<?php $phone = get_theme_mod('setting_phone');
			    if ($phone): ?>
			        <div class="masthead-tel">
			            <a id="tel-link" href="tel:<?php echo $phone; ?>">Schedule a tour today!&nbsp;<span><?php echo $phone; ?></span></a><a href="/residents/"><span class="resident-button"><button>Resident Corner</button></span></a>
			        </div>
			    <?php endif;

				wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

		</nav><!-- #site-navigation -->

		<!-- Display the frontpage circles with links -->
		<?php  if( is_page_template( 'frontpage.php' ) ) {
					if ( function_exists( 'mm4_front_page_highlights' ) ) {
					    mm4_front_page_highlights();
					}
		} ?>

	</header><!-- #masthead -->

		<!-- Displays featured image header if page has one -->
		<?php if ( has_post_thumbnail() ) {
			?><figure class="featured-image"><?php
				the_post_thumbnail( 'full'); ?>
	    	</figure><?php
		}

		// Display the map on the community-page
		if( is_page_template( 'page-community-page.php' ) ) {
		    		if ( function_exists( 'mm4_area_map' ) ) {
		        		mm4_area_map();
		     		}
		} ?>

	<div id="content" class="site-content">
