<?php
/**
 * Template Name: Neighborhood Page
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
			
			<?php if( function_exists(get_field) ) {
				$post_type = 'landmarks';
				$tax = 'landmark-type';
				$tax_terms = get_terms($tax);
				if ($tax_terms) {
					echo '<div id="landmark-listing">';
					foreach ($tax_terms  as $tax_term) {
						$args=array(
						'post_type' => $post_type,
						"$tax" => $tax_term->slug,
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'orderby' => 'title',
						'order' => 'ASC'
					);
					
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
						echo '<div class="community-listing-wrapper ' . $tax_term->slug . '">';
						echo '<h2 class="community-listing-header"> '. $tax_term->name . '</h2>';
						echo '<ul class="community-listing">';
						while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<?php $add = get_field('address');
						$add2 = get_field('address_2');
						$phone = get_field('phone');
						$url = get_field('landmark_website');
						$adtlDetails = get_field('additional_details'); ?>
						<li><span class="comm-name"><?php the_title(); ?>: </span><?php if($add) { echo '<span class="comm-add">' . $add . '</span>'; } ?><?php if($add2) { echo '<span class="comm-add-2">' . $add2 . '</span>'; } ?><?php if($phone) { echo '<span class="comm-details phone">' . $phone . '</span>'; } ?><?php if($url) { echo '<span class="comm-details url"><a target="_blank" href="' . $url . '">Visit Website &raquo;</a></span>'; } ?><?php if($adtlDetails) { echo '<br><br><span class="comm-details">' . $adtlDetails . '</span>'; } ?></li>
						<?php endwhile; ?>
						</ul>
						</div>
						<?php }
						wp_reset_query();
					}
					echo '</div>';
				}
			} ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
