<?php
/**
 * The template for displaying the home page.
 * Template Name: Floor Plans Page
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

        <?php if ( function_exists( 'mm4_floor_plan_highlights' ) ) {
            mm4_floor_plan_highlights();
        } ?>
    </div><!-- #primary -->

<?php
get_footer();
