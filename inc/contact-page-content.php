<?php
/**
 * Portabello Theme custom one bedroom floor plan for page-contact-page.php.
 *
 * @package portabello
 */

/**
 * Dynamically adds contact form content to the contact page.
 *
 */

function mm4_contact_page_form() { ?>
    <div class="contact-page-wrapper">

        <div class="contact-form-wrapper">
            <?php if(function_exists('mm4_you_contact_form')) {
                mm4_you_contact_form(); }?>
        </div> <!-- contact-form-wrapper -->

    </div> <!-- contact-page-wrapper -->

    <?php
}


function mm4_contact_page_sidebar() { ?>
    <div class="sidebar-wrapper">
    <div class="sidebar-info">
        <?php
            $address = get_field( 'street_address', 'option' );
            $city = get_field( 'city', 'option' );
            $state = get_field( 'state', 'option' );
            $zip = get_field( 'zip', 'option' );
            $email = get_field( 'email', 'option' );
            $phone = get_field( 'phone', 'option' );
            $fax = get_field( 'fax', 'option' );
        ?>

        <div class="hours">

             <?php if( have_rows('hours', 'option') ): ?>

                <h3>office hours</h3>

                <?php while( have_rows('hours', 'option') ): the_row();

                    $day = get_sub_field( 'day' );
                    $open = get_sub_field( 'open' );
                    $close = get_sub_field( 'close' ); ?>

                    <span><?php echo $day ?>: </span><span><?php echo $open ?> - </span><span><?php echo $close ?></span><br>

                <?php endwhile;

            endif; ?>

        </div>

        <div class="location">
            <h3>location</h3>
            <span><?php echo $address ?></span><br>
            <span><?php echo $city ?>, </span><span><?php echo $state ?> </span><span><?php echo $zip ?></span>
        </div>

        <div class="phone-fax">
            <h3>phone/fax</h3>
            <span>Phone: </span><span><?php echo $phone ?></span><br>
            <span>Fax: </span><span><?php echo $fax ?></span>
        </div>

    </div> <!-- sidebar-info -->

    <div class="map-wrapper">
        <div id="map-canvas"></div>
        <form id="get-directions">
            <label>Starting Address:
                <input type="text" id="start">
                <input type="hidden" id="end" value="38.800410,-76.987104">
            </label>
            <div id="response-panel"></div>
            <input type="submit" value="Get Directions">
        </form>
    </div> <!-- map-wrapper -->

    </div> <!-- sidebar-wrapper -->

    <?php
}

