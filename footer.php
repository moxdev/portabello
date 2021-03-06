<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portabello
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
        <?php
            if ( function_exists( 'mm4_footer_colophon' ) ) {
                mm4_footer_colophon( );
            }
        ?>
        </div><!-- .site-info -->
        <a class="mm4" href="https://www.mm4solutions.com/" target="_blank" id="mms">Website by Millennium Marketing Solutions</a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
