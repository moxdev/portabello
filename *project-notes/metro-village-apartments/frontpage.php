<?php
/**
 * Template Name: Home Page
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'front-page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		
		<?php if( function_exists(get_field) ) {
			$headline_1 = get_field('headline_1');
			$content_1 = get_field('content_1');
			$btn1_text = get_field('button_1_text');
			$btn1_url = get_field('button_1_url');
			$headline_2 = get_field('headline_2');
			$content_2 = get_field('content_2');
			$btn2_text = get_field('button_2_text');
			$btn2_url = get_field('button_2_url');
			if( $headline_1 || $headline_2 || $content_1 || $content_2 ) { ?>
				<section class="sub-section type-2">
					<div class="wrapper">
						<?php if( $headline_1 || $content_1 ) { ?>
							<div class="home-sub-content" id="home-sub-1">
								<?php if( $content_1 ): echo $content_1; endif; ?>
								<?php if( $headline_1): ?><h2><?php echo $headline_1; ?></h2><?php endif; ?>
								<?php if( $btn1_text && $btn1_url ): ?><a href="<?php echo $btn1_url; ?>" class="btn"><?php echo $btn1_text; ?></a><?php endif; ?>
							</div>
						<?php } ?>
						<?php if( $headline_2 || $content_2 ) { ?>
							<div class="home-sub-content" id="home-sub-2">
								<?php if( $content_2 ): echo $content_2; endif; ?>
								<?php if( $headline_2): ?><h2><?php echo $headline_2; ?></h2><?php endif; ?>
								<?php if( $btn2_text && $btn2_url ): ?><a href="<?php echo $btn2_url; ?>" class="btn"><?php echo $btn2_text; ?></a><?php endif; ?>
							</div>
						<?php } ?>
					</div>
				</section>
			<?php }
		} ?>
		
		<section class="sub-section view-gallery">
			<h2><a href="<?php echo get_permalink(23); ?>">View Our <span>Photo Gallery</span></a></h2>
		</section>
		
		<?php if( function_exists(get_field) ) {
			$headline_3 = get_field('headline_3');
			$content_3 = get_field('content_3');
			$btn3_text = get_field('button_3_text');
			$btn3_url = get_field('button_3_url');
			$headline_4 = get_field('headline_4');
			$content_4 = get_field('content_4');
			$btn4_text = get_field('button_4_text');
			$btn4_url = get_field('button_4_url');
			if( $headline_3 || $headline_4 || $content_3 || $content_4 ) { ?>
				<section class="sub-section type-1">
					<div class="wrapper">
						<?php if( $headline_3 || $content_3 ) { ?>
							<div class="home-sub-content" id="home-sub-3">
								<?php if( $content_3 ): echo $content_3; endif; ?>
								<?php if( $headline_3): ?><h2><?php echo $headline_3; ?></h2><?php endif; ?>
								<?php if( $btn3_text && $btn3_url ): ?><a href="<?php echo $btn3_url; ?>" class="btn"><?php echo $btn3_text; ?></a><?php endif; ?>
							</div>
						<?php } ?>
						<?php if( $headline_4 || $content_4 ) { ?>
							<div class="home-sub-content" id="home-sub-4">
								<?php if( $content_4 ): echo $content_4; endif; ?>
								<?php if( $headline_4): ?><h2><?php echo $headline_4; ?></h2><?php endif; ?>
								<?php if( $btn4_text && $btn4_url ): ?><a href="<?php echo $btn4_url; ?>" class="btn"><?php echo $btn4_text; ?></a><?php endif; ?>
							</div>
						<?php } ?>
					</div>
				</section>
			<?php }
		} ?>
		
		<div id="home-pets"><h2><span>Pets</span> Welcome</h2></div>
		
		<?php if( have_rows('studio_floor_plans', 12) ) { ?>
			<section id="home-floor-plans">
				<h2>Enjoy the Conveniences of Urban Living <span>in a Metro Village Apartment</span></h2>
				<?php if( have_rows('studio_floor_plans', 12) ): ?><a href="<?php echo get_permalink(12);?>#studio-floor-plans" class="btn jump-link">Studio</a><?php endif; ?>
				<?php if( have_rows('one_bedroom_floor_plans', 12) ): ?><a href="<?php echo get_permalink(12);?>#one-bedroom-floor-plans" class="btn jump-link">One Bedroom</a><?php endif; ?>
				<?php if( have_rows('two_bedroom_floor_plans', 12) ): ?><a href="<?php echo get_permalink(12);?>#two-bedroom-floor-plans" class="btn jump-link">Two Bedroom</a><?php endif; ?>
			</section>
		<?php } ?>
	</div><!-- #primary -->

<?php get_footer(); ?>
