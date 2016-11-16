<?php
/**
 * Template Name: Floor Plans Page
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page-floor-plans' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>
			
			<?php if( function_exists(get_field) ) {
				$features_headline = get_field('features_headline');
				$features_content = get_field('features_content');
				if( $features_headline || $features_content ) { ?>
				<section class="sub-section type-3">
					<div class="wrapper">
						<div class="features-wrapper">
							<?php if( $features_headline ): ?><h2><?php echo $features_headline; ?></h2><?php endif;
							if( $features_content ): echo $features_content; endif; ?>
						</div>
					</div>
				</section>
				<?php }
			} ?>
			
			<?php if( function_exists(get_field) ) {
				$studio_intro = get_field('studio_apartments_intro');
				if( $studio_intro || have_rows('studio_floor_plans') ) { ?>
					<a id="studio-floor-plans" class="anchor"></a>
					<section class="floor-plan-listing" id="studio-floor-plan-listing">
						<h2><span>Studio</span> Apartments</h2>
						<div class="wrapper">
							<?php if( $studio_intro ) { ?>
								<div class="floor-plan-intro">
									<?php echo $studio_intro; ?>
								</div>
								<?php if( have_rows('studio_floor_plans') ) : ?>
									<div class="plan-wrapper">
										<?php while ( have_rows('studio_floor_plans') ) : the_row();
										$plan_img= get_sub_field('plan_image');
										$plan_name = get_sub_field('plan_name');
										$plan_desc = get_sub_field('plan_description');
										$plan_name = get_sub_field('plan_name'); ?>
										<div class="plan-indiv">
											<?php if( $plan_name ): ?><h3 class="plan-name"><?php echo $plan_name; ?></h3><?php endif;
											if( $plan_desc ): ?><span class="plan-desc"><?php echo $plan_desc; ?></span><?php endif; ?>
											<?php if( $plan_img): ?><a class="btn" data-imagelightbox="a" href="<?php echo $plan_img['sizes']['plan-main']; ?>">View Floor Plan</a><?php endif; ?>
											<?php if( $plan_img): ?><img src="<?php echo $plan_img['sizes']['plan-thumb']; ?>" alt="<?php echo $plan_img['alt']; ?>"><?php endif; ?>
										</div>
										<?php endwhile; ?>
									</div>
									<?php endif; ?>
								<?php } ?>
						</div>
					</section>
				<?php }
			} ?>
			
			<?php if( function_exists(get_field) ) {
				$one_bedroom_intro = get_field('one_bedroom_apartments_intro');
				if( $one_bedroom_intro || have_rows('one_bedroom_floor_plans') ) { ?>
					<a id="one-bedroom-floor-plans" class="anchor"></a>
					<section class="floor-plan-listing" id="one-bedroom-floor-plan-listing">
						<h2><span>One Bedroom</span> Apartments</h2>
						<div class="wrapper">
							<?php if( $one_bedroom_intro ) { ?>
								<div class="floor-plan-intro">
									<?php echo $one_bedroom_intro; ?>
								</div>
								<?php if( have_rows('one_bedroom_floor_plans') ) : ?>
									<div class="plan-wrapper">
										<?php while ( have_rows('one_bedroom_floor_plans') ) : the_row();
										$plan_img= get_sub_field('plan_image');
										$plan_name = get_sub_field('plan_name');
										$plan_desc = get_sub_field('plan_description');
										$plan_name = get_sub_field('plan_name'); ?>
										<div class="plan-indiv">
											<?php if( $plan_name ): ?><h3 class="plan-name"><?php echo $plan_name; ?></h3><?php endif;
											if( $plan_desc ): ?><span class="plan-desc"><?php echo $plan_desc; ?></span><?php endif; ?>
											<?php if( $plan_img): ?><a class="btn" data-imagelightbox="a" href="<?php echo $plan_img['sizes']['plan-main']; ?>">View Floor Plan</a><?php endif; ?>
											<?php if( $plan_img): ?><img src="<?php echo $plan_img['sizes']['plan-thumb']; ?>" alt="<?php echo $plan_img['alt']; ?>"><?php endif; ?>
										</div>
										<?php endwhile; ?>
									</div>
									<?php endif; ?>
								<?php } ?>
						</div>
					</section>
				<?php }
			} ?>
			
			<?php if( function_exists(get_field) ) {
				$two_bedroom_intro = get_field('two_bedroom_apartments_intro');
				if( $two_bedroom_intro || have_rows('two_bedroom_floor_plans') ) { ?>
					<a id="two-bedroom-floor-plans" class="anchor"></a>
					<section class="floor-plan-listing" id="two-bedroom-floor-plan-listing">
						<h2><span>Two Bedroom</span> Apartments</h2>
						<div class="wrapper">
							<?php if( $two_bedroom_intro ) { ?>
								<div class="floor-plan-intro">
									<?php echo $two_bedroom_intro; ?>
								</div>
								<?php if( have_rows('two_bedroom_floor_plans') ) : ?>
									<div class="plan-wrapper">
										<?php while ( have_rows('two_bedroom_floor_plans') ) : the_row();
										$plan_img= get_sub_field('plan_image');
										$plan_name = get_sub_field('plan_name');
										$plan_desc = get_sub_field('plan_description');
										$plan_name = get_sub_field('plan_name'); ?>
										<div class="plan-indiv">
											<?php if( $plan_name ): ?><h3 class="plan-name"><?php echo $plan_name; ?></h3><?php endif;
											if( $plan_desc ): ?><span class="plan-desc"><?php echo $plan_desc; ?></span><?php endif; ?>
											<?php if( $plan_img): ?><a class="btn" data-imagelightbox="a" href="<?php echo $plan_img['sizes']['plan-main']; ?>">View Floor Plan</a><?php endif; ?>
											<?php if( $plan_img): ?><img src="<?php echo $plan_img['sizes']['plan-thumb']; ?>" alt="<?php echo $plan_img['alt']; ?>"><?php endif; ?>
										</div>
										<?php endwhile; ?>
									</div>
									<?php endif; ?>
								<?php } ?>
						</div>
					</section>
				<?php }
			} ?>
			
			<span class="disclaimer">Apartment floor plans are for illustrative purposes only and may not be to scale.</span>
		</main>
	</div><!-- #primary -->

<?php get_footer(); ?>
