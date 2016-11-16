<?php
/**
 * Template part for displaying page content in page-floor-plans.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Metro_Village_Apartments
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( function_exists(get_field) ) { 
		$onPageTitle = get_field('on_page_title');
		if($onPageTitle) { ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php echo $onPageTitle; ?></h1>
		</header>
	<?php } 
	} ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'metro-village-apartments' ),
				'after'  => '</div>',
			) );
		?>
		
		<?php if( have_rows('studio_floor_plans') ): ?><a href="#studio-floor-plans" class="btn jump-link">Studio</a><?php endif; ?>
		<?php if( have_rows('one_bedroom_floor_plans') ): ?><a href="#one-bedroom-floor-plans" class="btn jump-link">One Bedroom</a><?php endif; ?>
		<?php if( have_rows('two_bedroom_floor_plans') ): ?><a href="#two-bedroom-floor-plans" class="btn jump-link">Two Bedroom</a><?php endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'metro-village-apartments' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
