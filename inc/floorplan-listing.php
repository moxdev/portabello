<?php
/**
 * Portabello Theme custom one bedroom floor plan for page-floor-plan-listing.php.
 *
 * @package portabello
 */

/**
 * Dynamically adds floor plan information and image to the floor plan web pages.
 *
 */

function mm4_floor_plan_listing() {
    if(function_exists('get_field')) {
        if( have_rows('floor_plans') ): ?>
            <div class='floorplan-wrapper'>
                <div class='fp-models'>

                    <?php while( have_rows('floor_plans') ): the_row();

                        $img = get_sub_field('floor_plan_image');
                        $desc = get_sub_field('floor_plan_description');
                        $sqft = get_sub_field('floor_plan_square_feet'); ?>

                        <div class='floorplan-section'>

                            <?php if( $desc ): ?>
                                <h3><?php echo $desc; ?></h3>
                            <?php endif; ?>

                            <?php if( $sqft ): ?>
                                <h4><?php echo $sqft; ?> sq.ft</h4>
                            <?php endif; ?>

                            <?php if( $img ): ?>
                                <a href="<?php echo $img['sizes']['floor-plan-lightbox']; ?>" class="fp-trigger" data-imagelightbox="c"><img src="<?php echo $img['sizes']['floor-plan-thumb']; ?>" alt="<?php echo $img['alt']; ?>" description="<?php echo $img['description']; ?>"></a>
                             <?php endif; ?>

                        </div>

                    <?php endwhile; ?> <!-- floorplan-section -->

                </div> <!-- fp-models -->

            </div> <!-- floorplan-wrapper -->

        <?php endif;
    }
}
