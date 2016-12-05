<?php
/**
 * Portabello Theme custom content for page-floor-plan-page.php.
 *
 * @package portabello
 */

/**
 * Adds highlight circle links to the floor plan parent page.
 *
 */

function mm4_floor_plan_highlights() { ?>
    <div class="floor-plan-display">
        <div class="floor-plan-circles">
            <a href="/one-bedroom-apartments/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/one-bedroom-green-circle.png" alt="green circle link to one bedroom floor plan page"></a>
            <a href="/two-bedroom-apartments/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/two-bedroom-red-circle.png" alt="red circle link to two bedroom floor plan page"></a>
            <a href="/three-bedroom-apartments-townhome/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/three-bedroom-orange-circle.png" alt="orange circle link to three bedroom floor plan page"></a>
        </div>
    </div> <?php
}
