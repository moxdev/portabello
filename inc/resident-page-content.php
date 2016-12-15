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

function mm4_resident_page_form() { ?>
    <div class="service-request-wrapper">
        <h1 class="service-h1">Service Request</h1>
            <p>For routine requests only. All emergencies should be reported by calling <a href="tel:301-839-5600">301-839-5600</a></p>
        <?php  if ( function_exists( 'mm4_you_service_request_form' ) ) {
        mm4_you_service_request_form(); }?>
    </div> <?php
}


function mm4_resident_page_sidebar() { ?>
    <div class="sidebar-wrapper">
        <div class="sidebar-info">
            <h2>Pay Your Rent Online</h2>
                <a href="https://www.paylease.com/index_out.php?pm_id=25863697"><button>Portabello I (Buildings 6405-6477)</button></a>
                <a href="https://www.paylease.com/index_out.php?pm_id=25863701"><button>Portabello II (Buildings 6515-6335)</button></a>
        </div> <!-- sidebar-info -->
    </div> <?php
}

