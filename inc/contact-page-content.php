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

function mm4_contact_page_content() { ?>
    <div class="contact-page-wrapper">

        <div class="contact-form-wrapper">
            <?php if(function_exists('mm4_you_contact_form')) {
                mm4_you_contact_form(); }?>
        </div> <!-- contact-form-wrapper -->

        <div class="sidebar-wrapper">
            <div class="sidebar-info">
                <div class="hours"></div>
                <div class="location"></div>
                <div class="phone-fax"></div>
            </div>

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

    </div> <!-- contact-page-wrapper -->


    <?php
}
