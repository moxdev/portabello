<?php
/**
 * The template for displaying the home page.
 * Template Name: Contact Page
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

            if(function_exists('mm4_contact_page_form')) {
                mm4_contact_page_form();
            }
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php  if(function_exists('mm4_contact_page_sidebar')) {
        mm4_contact_page_sidebar();
    }



get_footer();