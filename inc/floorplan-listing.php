<?php
/**
 * Portabello Theme custom one bedroom floor plan for page-one-bedroom-page.php.
 *
 * @package portabello
 */

/**
 * Dynamically adds one bedroom floor plan information and image to the one bedroom floor plan web page.
 *
 */

function mm4_floor_plan_listing() { ?>
    <div class="floorplan-wrapper">
        <?php if( have_rows('floor_plans') ):

            while( have_rows('floor_plans') ): the_row();

                $desc = get_sub_field('floor_plan_description');
                $sqft = get_sub_field('floor_plan_square_feet');
                $image = get_sub_field('floor_plan_image');

                ?>

                <div class="floorplan-section">

                    <?php if( $desc ): ?>
                        <h3><?php echo $desc; ?></h3>
                    <?php endif; ?>

                    <?php if( $sqft ): ?>
                        <h4><?php echo $sqft; ?> sq.ft</h4>
                    <?php endif; ?>

                    <?php if( $image ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                    <?php endif; ?>

                </div>

            <?php endwhile; ?>

        <?php endif; ?>

    </div><?php

}
