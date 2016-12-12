<?php
/**
 * Portabello Theme custom content for page-amenities-page.php.
 *
 * @package portabello
 */

/**
 * Dynamically amenities content to the amenities web page.
 *
 */

function mm4_amenities() { ?>
    <div class="amenities-wrapper">
        <div class="apartment-section">
                <?php

                $apartment = get_field( "apartment_amenities" );

                if( $apartment ): ?>
                    <h2>Apartment Amenities</h2>

                    <div class="amenities-list">
                        <?php echo $apartment ?>
                    </div>
                <?php endif; ?>

        </div>
        <div class="community-section">
                <?php

                $community = get_field( "community_amenities" );

                if( $community ): ?>
                    <h2>Community Amenities</h2>

                    <div class="amenities-list">
                        <?php echo $community ?>
                    </div>
                <?php endif; ?>

        </div>
    </div>

    <?php
}
