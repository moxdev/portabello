<?php
/**
 * The template for displaying the home page.
 * Template Name: Community Page
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

    <?php if ( function_exists( 'mm4_community_landmark_list' ) ) {
        mm4_community_landmark_list();
    } ?>

<?php

get_footer();
