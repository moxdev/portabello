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
            <a href="/floor-plans/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/front-green-circle.png" alt="green circle link to floor plans page"></a>
            <a href="/oxon-hill-community/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/front-red-circle.png" alt="red circle link to community page"></a>
            <a href="/residents/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/front-orange-circle.png" alt="orange circle linnk to residents portal page"></a>
        </div>
    </div> <?php
}
