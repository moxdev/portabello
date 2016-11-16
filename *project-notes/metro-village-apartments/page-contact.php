<?php
/**
 * Template Name: Contact Page
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>
			
			<form action="/thank-you/" method="post" id="main-contact" name="main-contact" novalidate>
				<?php $email = get_theme_mod('setting_email'); ?>
				<input type="hidden" value="<?php echo $email; ?>" id="recipients" name="recipients">
				<input type="text" placeholder="* First Name" id="form-fname" name="form-fname">
				<input type="text" placeholder="* Last Name" id="form-lname" name="form-lname">
				<input type="tel" placeholder="* Phone" id="form-phone" name="form-phone" >
				<input type="email" placeholder="* Email" id="form-email" name="form-email">
				<textarea placeholder="Comments" rows="5" id="form-comments" name="form-comments"></textarea>
				<label for="honey" class="honey">What is 2 plus three + 4?</label>
				<input name="honey" type="text" size="4" id="honey" maxlength="4" class="honey">
				<div class="error-box"></div>
				<input type="submit" value="Contact Us">
			</form>

		</main><!-- #main -->
		<section class="sub-section type-1">
			<div class="wrapper">
				<div class="contact-info-wrapper">
					<div class="contact-info">
						<h2>Office <span>Hours</span></h2>
						<?php $hours1 = get_theme_mod('setting_hours_1');
						$hours2 = get_theme_mod('setting_hours_2');
						$hours3 = get_theme_mod('setting_hours_3');
						$hours4 = get_theme_mod('setting_hours_4');
						if( $hours1 ) : ?><span><?php echo $hours1; ?></span><?php endif;
						if( $hours2 ) : ?><span><?php echo $hours2; ?></span><?php endif;
						if( $hours3 ) : ?><span><?php echo $hours3; ?></span><?php endif;
						if( $hours4 ) : ?><span><?php echo $hours4; ?></span><?php endif; ?>
					</div>
					<div class="contact-info">
						<h2>Address/<span>Phone</span></h2>
						<?php $add = get_theme_mod('setting_address');
						$city = get_theme_mod('setting_city');
						$state = get_theme_mod('setting_state');
						$zip = get_theme_mod('setting_zip');
						$ph = get_theme_mod('setting_phone'); 
						if( $add ) : ?><span><?php echo $add; ?></span><?php endif;
						if( $city || $state || $zip ): ?><span><?php endif; if( $city ): echo $city; endif; if( $state ): ?>, <?php echo $state; endif; if( $zip ): ?> <?php echo $zip; endif; if( $city || $state || $zip ): ?></span><?php endif;
						if( $ph ): ?><span><a class="tel" onclick="ga('send', 'event', 'Links', 'Link', 'Telephone Link');" href="tel:<?php echo $ph; ?>"><?php echo $ph; ?></a></span><?php endif; ?>
					</div>
				</div>
				<div id="map-directions">
					<div id="map-canvas"></div>
					<form id="form-directions" onSubmit="calcRoute(); return false;">
						<label for="start">Starting Address</label>
						<input type="text" id="start" name="start" placeholder="Starting Address">
						<input type="hidden" id="end" name="end" value="<?php echo $add . ', ' . $city . ', ' . $state . ' ' . $zip; ?>">
						<div class="error-box" id="map-error"></div>
						<input type="button" onclick="calcRoute();" value="Get Directions">
					</form>
					<div id="directions-panel"></div>
				</div>
			</div>
		</section>
	</div><!-- #primary -->

<?php get_footer(); ?>
