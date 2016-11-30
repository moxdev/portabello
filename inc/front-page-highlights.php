<?php
/**
 * Portabello Theme custom content for frontpage.php.
 *
 * @package portabello
 */

/**
 * Adds highlight circle links to the front page.
 *
 */

function mm4_front_page_highlights() { ?>
    <div class="frontpage-display">
        <div class="border">
            <h1>Design Your Life</h1>
            <h2>Great Apartments &#8226 Convenient Location</h2>
        </div>
        <div class="front-page-circles">
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/front-green-circle.svg" alt=""></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/front-red-circle.svg" alt=""></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/front-orange-circle.svg" alt=""></a>
        </div>
    </div> <?php
}
