<?php
/**
 * The template for displaying the resident's portal page.
 * Template Name: Residents Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package portabello
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.

            ?>
        </main><!-- #main -->
    </div><!-- #primary -->

    <div class="resident-wrapper"><?php
        if ( function_exists( 'mm4_resident_page_sidebar' ) ) {
            mm4_resident_page_sidebar();
        }

        if ( function_exists( 'mm4_resident_page_form' ) ) {
            mm4_resident_page_form();
        } ?>
    </div> <?php

get_footer();
