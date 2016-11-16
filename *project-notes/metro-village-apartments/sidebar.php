<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Metro_Village_Apartments
 */

?>

<div id="secondary" role="complementary">
	<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-global') ) :
		 endif;
	?>
	<?php if (is_single() || is_archive() || is_home()) {
		 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-blog') ) :
		 endif;
	} ?>
</div><!-- #secondary -->
