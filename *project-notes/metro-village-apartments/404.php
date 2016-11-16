<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Metro_Village_Apartments
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found sub-section type-4" style="text-align:center">
				<header class="page-header">
					<h1 class="page-title"><span style="line-height:1.5">We're Sorry,</span> But That Page Can't Be Found</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Please use the "back" button in your browser or <a href="<?php echo esc_url( home_url( '/' ) ); ?>">return to our home page.</a></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
