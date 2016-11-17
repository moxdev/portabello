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
    <div class="contact-wrapper">

        <?php if(function_exists('mm4_you_contact_form')) {
            mm4_you_contact_form();
        }?>

        <div class="sidebar"></div>


    </div>

    <?php
}
