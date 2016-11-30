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
            <a href="localhost:8888/portabello/floor-plans/one-bedroom/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/one-bedroom-green-circle.svg" alt="green circle link to one bedroom floor plan page"></a>
            <a href="localhost:8888/portabello/floor-plans/two-bedroom/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/two-bedroom-red-circle.svg" alt="red circle link to two bedroom floor plan page"></a>
            <a href="localhost:8888/portabello/floor-plans/three-bedroom/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles/three-bedroom-orange-circle.svg" alt="orange circle link to three bedroom floor plan page"></a>
        </div>
    </div> <?php
}
