<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Metro_Village_Apartments
 */

if(is_page(61)) {
	require ('inc/contact.php');
} ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-73589169-1', 'auto');
ga('send', 'pageview');
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'metro-village-apartments' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="223px" height="36.3px" viewBox="0 0 223 36.3" enable-background="new 0 0 223 36.3" xml:space="preserve">
					<g>
						<polygon fill="#808184" points="65.4,36.3 78.3,36.3 78.3,3.4 	"/>
						<polygon fill="#808184" points="57.4,0.1 54.3,8 60.4,23.5 69.6,0.1 	"/>
						<polygon fill="#808184" points="43.1,36.3 55.4,36.3 49.3,20.8 	"/>
						<polygon fill="#808184" points="87.9,18.8 89.9,4.6 90.1,4.6 95.9,16.3 101.6,4.6 101.8,4.6 103.8,18.8 102.4,18.8 101.1,8.7 
							96,18.8 95.7,18.8 90.6,8.6 89.2,18.8 	"/>
						<polygon fill="#808184" points="105.4,4.6 113.6,4.6 113.6,6 106.9,6 106.9,10.5 111,10.5 111,11.9 106.9,11.9 106.9,17.4 
							113.5,17.4 113.5,18.8 105.4,18.8 	"/>
						<polygon fill="#808184" points="114.8,6 114.8,4.6 122.6,4.6 122.6,6 119.4,6 119.4,18.8 117.9,18.8 117.9,6 	"/>
						<g>
							<path fill="#808184" d="M125.5,6v4.8l2.4,0c0.9,0,1.6-0.1,2.1-0.3c0.5-0.2,0.8-0.5,1.1-0.9c0.3-0.4,0.4-0.8,0.4-1.3
								c0-0.5-0.1-0.9-0.4-1.3c-0.3-0.4-0.6-0.7-1-0.8C129.6,6.1,128.9,6,128,6H125.5z M124.1,4.6h2.8c1.6,0,2.6,0.1,3.2,0.2
								c0.8,0.2,1.5,0.6,2.1,1.2c0.5,0.6,0.8,1.4,0.8,2.3c0,0.8-0.2,1.5-0.5,2c-0.4,0.6-0.9,1-1.6,1.3c-0.7,0.3-1.3,0.5-1.8,0.5l4.1,6.6
								h-1.7l-4.1-6.6h-1.8v6.6h-1.4V4.6z"/>
							<path fill="#808184" d="M141.2,5.8c-1,0-2,0.3-3,0.8c-0.9,0.5-1.7,1.3-2.2,2.2c-0.5,0.9-0.8,2-0.8,3.1c0,1.7,0.6,3,1.7,4.1
								s2.6,1.6,4.2,1.6c1.1,0,2.1-0.3,3.1-0.8c0.9-0.5,1.7-1.3,2.2-2.2c0.5-0.9,0.8-1.8,0.8-2.7c0-1.1-0.3-2.1-0.8-3
								c-0.5-0.9-1.3-1.6-2.2-2.2C143.3,6.1,142.3,5.8,141.2,5.8 M141.1,4.4c2.1,0,3.9,0.7,5.4,2.2c1.4,1.4,2.2,3.2,2.2,5.3
								c0,2.1-0.7,3.8-2.2,5.1c-1.4,1.3-3.2,2-5.3,2c-2.1,0-3.9-0.7-5.3-2.2c-1.4-1.4-2.2-3.1-2.2-4.9c0-1.4,0.3-2.6,1-3.8
								c0.7-1.2,1.6-2.1,2.7-2.7C138.6,4.7,139.8,4.4,141.1,4.4"/>
						</g>
						<polygon fill="#D2AF1F" points="151.6,4.7 153.1,4.7 157.8,15.6 162.6,4.7 164.1,4.7 158,18.9 157.7,18.9 	"/>
						<rect x="165.7" y="4.6" fill="#D2AF1F" width="1.4" height="14.2"/>
						<polygon fill="#D2AF1F" points="169.8,4.6 171.2,4.6 171.2,17.4 176.6,17.4 176.6,18.8 169.8,18.8 	"/>
						<polygon fill="#D2AF1F" points="178.3,4.6 179.7,4.6 179.7,17.4 185.2,17.4 185.2,18.8 178.3,18.8 	"/>
						<path fill="#D2AF1F" d="M192.4,7.6l-2.4,5.1h4.9L192.4,7.6z M192.6,4.6l6.6,14.2h-1.5l-2.2-4.7h-6.1l-2.2,4.7h-1.6l6.7-14.2H192.6z
							"/>
						<g>
							<path fill="#D2AF1F" d="M212.7,7.1l-1.1,1c-0.8-0.8-1.7-1.4-2.6-1.8c-0.9-0.4-1.9-0.6-2.8-0.6c-1.1,0-2.2,0.3-3.2,0.8
								c-1,0.5-1.8,1.3-2.3,2.2c-0.6,0.9-0.8,1.8-0.8,2.7c0,1.1,0.3,2.1,0.9,3c0.6,1,1.4,1.7,2.4,2.3s2.1,0.8,3.3,0.8
								c1.5,0,2.7-0.4,3.7-1.2c1-0.8,1.6-1.9,1.8-3.2h-4.5v-1.4h6.1c0,2.2-0.7,3.9-1.9,5.2c-1.3,1.3-3,1.9-5.2,1.9
								c-2.6,0-4.7-0.9-6.2-2.7c-1.2-1.4-1.8-3-1.8-4.8c0-1.3,0.3-2.5,1-3.6s1.6-1.9,2.8-2.6c1.2-0.7,2.5-1,4-1c1.2,0,2.3,0.2,3.4,0.7
								C210.7,5.5,211.7,6.1,212.7,7.1"/>
						</g>
						<polygon fill="#D2AF1F" points="214.9,4.6 214.9,18.8 222.9,18.8 222.9,17.4 216.3,17.4 216.3,11.9 220.4,11.9 220.4,10.5 
							216.3,10.5 216.3,6 223,6 223,4.6 	"/>
						<path fill="#808184" d="M113.4,26.7l-1.4,2.9h2.8L113.4,26.7z M113.5,25l3.8,8h-0.9l-1.3-2.7h-3.5l-1.3,2.7h-0.9l3.8-8H113.5z"/>
						<g>
							<path fill="#808184" d="M122.1,25.8v2.7l1.4,0c0.5,0,0.9,0,1.2-0.1c0.3-0.1,0.5-0.3,0.6-0.5c0.1-0.2,0.2-0.5,0.2-0.7
								c0-0.3-0.1-0.5-0.2-0.7c-0.1-0.2-0.3-0.4-0.6-0.5c-0.2-0.1-0.6-0.1-1.2-0.1H122.1z M121.3,25h1.6c0.9,0,1.5,0,1.9,0.1
								c0.5,0.1,0.8,0.3,1.1,0.7c0.3,0.3,0.4,0.8,0.4,1.3c0,0.5-0.1,1-0.4,1.3c-0.3,0.3-0.7,0.6-1.2,0.7c-0.4,0.1-1,0.1-2,0.1h-0.6V33
								h-0.8V25z"/>
						</g>
						<path fill="#808184" d="M133.1,26.7l-1.4,2.9h2.8L133.1,26.7z M133.2,25l3.8,8h-0.9l-1.3-2.7h-3.5l-1.3,2.7h-0.9l3.8-8H133.2z"/>
						<g>
							<path fill="#808184" d="M141.8,25.8v2.7l1.4,0c0.5,0,0.9-0.1,1.2-0.2c0.3-0.1,0.5-0.3,0.6-0.5c0.1-0.2,0.2-0.5,0.2-0.8
								c0-0.3-0.1-0.5-0.2-0.7c-0.1-0.2-0.3-0.4-0.6-0.5c-0.2-0.1-0.6-0.1-1.2-0.1H141.8z M141,25h1.6c0.9,0,1.5,0,1.8,0.1
								c0.5,0.1,0.9,0.3,1.2,0.7c0.3,0.4,0.4,0.8,0.4,1.3c0,0.4-0.1,0.8-0.3,1.2c-0.2,0.3-0.5,0.6-0.9,0.8c-0.4,0.2-0.7,0.3-1,0.3
								l2.3,3.7h-1l-2.3-3.7h-1v3.7H141V25z"/>
						</g>
						<polygon fill="#808184" points="149.3,25.8 149.3,25 153.7,25 153.7,25.8 151.9,25.8 151.9,33.1 151.1,33.1 151.1,25.8 	"/>
						<polygon fill="#808184" points="157.3,33.1 158.4,25 158.6,25 161.8,31.6 165.1,25 165.2,25 166.4,33.1 165.6,33.1 164.8,27.3 
							161.9,33.1 161.7,33.1 158.9,27.3 158.1,33.1 	"/>
						<polygon fill="#808184" points="170.7,25 175.3,25 175.3,25.8 171.5,25.8 171.5,28.3 173.9,28.3 173.9,29.1 171.5,29.1 171.5,32.3 
							175.3,32.3 175.3,33.1 170.7,33.1 	"/>
						<polygon fill="#808184" points="179.7,33.1 179.7,25 179.9,25 185.2,31.2 185.2,25 186,25 186,33.1 185.8,33.1 180.5,27 
							180.5,33.1 	"/>
						<polygon fill="#808184" points="190,25.8 190,25 194.4,25 194.4,25.8 192.6,25.8 192.6,33.1 191.8,33.1 191.8,25.8 	"/>
						<g>
							<path fill="#808184" d="M197.5,31.4l0.7-0.4c0.5,0.9,1,1.3,1.7,1.3c0.3,0,0.5-0.1,0.8-0.2c0.2-0.1,0.4-0.3,0.5-0.5
								c0.1-0.2,0.2-0.4,0.2-0.7c0-0.3-0.1-0.5-0.3-0.8c-0.3-0.4-0.7-0.7-1.4-1.1c-0.7-0.5-1.1-0.9-1.2-1.1c-0.3-0.4-0.4-0.8-0.4-1.2
								c0-0.4,0.1-0.7,0.2-1c0.2-0.3,0.4-0.5,0.7-0.7c0.3-0.2,0.6-0.3,1-0.3c0.4,0,0.7,0.1,1.1,0.3c0.3,0.2,0.7,0.5,1,1l-0.7,0.5
								c-0.3-0.4-0.6-0.7-0.8-0.8c-0.2-0.1-0.4-0.2-0.7-0.2c-0.3,0-0.6,0.1-0.8,0.3c-0.2,0.2-0.3,0.4-0.3,0.7c0,0.2,0,0.3,0.1,0.5
								c0.1,0.2,0.2,0.3,0.4,0.5c0.1,0.1,0.5,0.4,1,0.8c0.7,0.5,1.2,0.9,1.4,1.3c0.3,0.3,0.4,0.7,0.4,1.1c0,0.6-0.2,1.1-0.7,1.5
								c-0.4,0.4-1,0.6-1.6,0.6c-0.5,0-0.9-0.1-1.3-0.4S197.8,32,197.5,31.4"/>
						</g>
						<polygon fill="#E84B37" points="42.5,0 32.1,26.8 21.6,0 14.2,0 0,36.3 7.4,36.3 17.9,9.4 28.4,36.3 28.3,36.3 28.4,36.3 
							35.7,36.3 35.8,36.3 35.7,36.3 46.2,9.5 56,34.7 59.7,25.2 49.9,0 	"/>
						<polygon fill="#D2AF1F" points="70.9,0.1 56.7,36.3 64.1,36.3 78.3,0.1 	"/>
					</g>
				</svg>
			</a>
		</div><!-- .site-branding -->
		
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e( 'Primary Menu', 'metro-village-apartments' ); ?></span></button>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'link_before' => '<span>', 'link_after' => '</span>', 'container' => '' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<?php if( !is_page_template('frontpage.php') ) { ?>
			<span class="site-tag"><?php echo html_entity_decode( get_bloginfo('description') ); ?></span>
		<?php } ?>
		
		<?php if( is_page_template('frontpage.php') ) {
			if( function_exists('get_field') ) {
				$banner = get_field('message');
				if( $banner ): ?><div class="home-banner"><?php echo $banner; ?></div><?php endif;
			}
			
			global $post;
			$thumbnail_id = get_post_thumbnail_id($post->ID);
			$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));
			if ($thumbnail_image) { ?>
				<div class="home-feature-wrapper">
					<?php the_post_thumbnail('home-feature'); ?>
				</div>
				<?php if( isset($thumbnail_image[0]) ) { ?>
					<div class="home-feature-caption">
						<?php echo '<span>' . $thumbnail_image[0]->post_excerpt . '</span>'; ?>
						<a href="<?php echo get_permalink(12); ?>" class="btn">See How Easy It Is</a>
					</div>
				<?php }
			}
		} ?>
		
		<?php if( is_page_template('page-neighborhood.php') ) { ?>
		<div id="map-canvas"></div><button id="reset">Reset Map</button>
		<?php } ?>