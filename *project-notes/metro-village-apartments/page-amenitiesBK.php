<?php
/**
 * Template Name: Amenities Page
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php /*while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile;*/ // End of the loop. ?>

			<?php if( function_exists('get_field') ) {
				$headline_1 = get_field('headline_1');
				$content_1 = get_field('content_1');
				if( $headline_1 || $content_1 ) { ?>
					<section class="sub-section type-4 drill-sub-1" id="easy-commute">
						<div class="wrapper">
							<?php if( $headline_1 ): ?><h2 class="section-header"><?php echo $headline_1; ?></h2><?php endif;
							if( $content_1 ): echo $content_1; endif; ?>
						</div>
						<div class="side-img type-1">
							<div class="side-img-interior"><img src="<?php echo get_template_directory_uri() . '/imgs/side-img.jpg'; ?>" alt="Metro Village Apartments"></div>
						</div>
					</section>
				<?php }
			} ?>
			
			<?php if( function_exists('get_field') ) {
				$headline_2 = get_field('headline_2');
				$content_2 = get_field('content_2');
				if( $headline_2 || $content_2 ) { ?>
					<section class="sub-section type-2 drill-sub-2" id="live-green">
						<div class="wrapper">
							<?php if( $headline_2 ): ?><h2 class="section-header"><?php echo $headline_2; ?></h2><?php endif;
							if( $content_2 ): echo $content_2; endif; ?>
						</div>
					</section>
				<?php }
			} ?>
			
			<?php if( function_exists('get_field') ) {
				$headline_3 = get_field('headline_3');
				$content_3 = get_field('content_3');
				if( $headline_3 || $content_3 ) { ?>
					<section class="sub-section type-4 drill-sub-3" id="urban-living">
						<div class="wrapper">
							<?php if( $headline_3 ): ?><h2 class="section-header"><?php echo $headline_3; ?></h2><?php endif;
							if( $content_3 ): echo $content_3; endif; ?>
						</div>
						<div class="side-img type-2">
							<div class="side-img-interior"><img src="<?php echo get_template_directory_uri() . '/imgs/side-img.jpg'; ?>" alt="Metro Village Apartments"></div>
						</div>
					</section>
				<?php }
			} ?>
			
			<?php if( function_exists('get_field') ) {
				$headline_4 = get_field('headline_4');
				$content_4 = get_field('content_4');
				if( $headline_4 || $content_4 ) { ?>
					<section class="sub-section type-1 drill-sub-4" id="easy-leisure">
						<div class="wrapper">
							<?php if( $headline_4 ): ?><h2 class="section-header"><?php echo $headline_4; ?></h2><?php endif;
							if( $content_4 ): echo $content_4; endif; ?>
						</div>
					</section>
				<?php }
			} ?>
			
		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php get_footer(); ?>
