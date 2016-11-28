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

	<div class="featured-image">
		<?php if ( has_post_thumbnail() ) {
	    	the_post_thumbnail( 'full');
		} ?>
	</div>

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
			            <a id="tel-link" href="tel:<?php echo $phone; ?>">Schedule a tour today!&nbsp;<span><?php echo $phone; ?></span></a><span class="resident-button"><button>Resident Corner</button></span>
			        </div>
			    <?php endif;

				wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

		</nav><!-- #site-navigation -->

		<?php  if( is_page_template( 'frontpage.php' ) ) { ?>
		    <div class="frontpage-display">
		    	<div class="border">
		    		<h1>Design Your Life</h1>
		    		<h2>Great Apartments &#8226 Convenient Location</h2>
		    	</div>
		    	<div class="circles">
		    		<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 56.98 56.98"><defs><style>.cls-1,.cls-3{fill:none;}.cls-2{clip-path:url(#clip-path);}.cls-3{stroke:#fff;stroke-width:0.33px;}.cls-4{fill:#bbbc8a;}.cls-5{font-size:6.48px;fill:#fff;font-family:$font__arvo;}</style><clipPath id="clip-path" transform="translate(-211 -347.02)"><rect class="cls-1" x="211" y="347.02" width="56.98" height="56.98"/></clipPath></defs><title>green-circle</title><g class="cls-2"><circle class="cls-3" cx="28.49" cy="28.49" r="28.32"/><path class="cls-4" d="M239.13,401a25.49,25.49,0,1,0-25.49-25.49A25.49,25.49,0,0,0,239.13,401" transform="translate(-211 -347.02)"/></g><text class="cls-5" transform="translate(18.95 24.47)">Select a</text><text class="cls-5" transform="translate(38.88 24.47)"> </text><text class="cls-5" transform="translate(16.23 31.41)">Floor Plan</text><text class="cls-5" transform="translate(41.6 31.41)"></text><text class="cls-5" transform="translate(19.71 38.35)">Design</text></svg>
		    	</div>
		    	<div class="circles">
		    		<img src="http://localhost:8888/portabello/wp-content/themes/mm4/images/green-circle.png" alt="">
		    	</div>
		    	<div class="circles">
		    		<img src="http://localhost:8888/portabello/wp-content/themes/mm4/images/green-circle.png" alt="">
		    	</div>
		    </div>
		    <?php
		} ?>

	</header><!-- #masthead -->

		<!-- Display the map on the community-page -->
		<?php  if( is_page_template( 'page-community-page.php' ) ) {
		    		if ( function_exists( 'mm4_area_map' ) ) {
		        		mm4_area_map();
		     		} ;
		} ?>

	<div id="content" class="site-content">
