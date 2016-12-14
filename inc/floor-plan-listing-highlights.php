<?php
/**
 * Portabello Theme custom content for page-floor-plan-listing-page.php.
 *
 * @package portabello
 */

/**
 * Adds highlight circle links to the floor plan parent page.
 *
 */

function mm4_floor_plan_listing_highlights() { ?>
    <div class="floor-plan-display">
        <div class="floor-plan-circles">
            <a href="/one-bedroom-apartments/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/one-bedroom-listing-highlight.png" alt="green circle link to one bedroom floor plan page"></a>
            <a href="/two-bedroom-apartments/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/two-bedroom-listing-highlight.png" alt="red circle link to two bedroom floor plan page"></a>
            <a href="/three-bedroom-apartments-townhome/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/three-bedroom-listing-highlight.png" alt="orange circle link to three bedroom floor plan page"></a>
        </div>
    </div> <?php
}
