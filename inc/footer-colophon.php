<?php
/**
 * Portabello Theme custom footer colophon for footer.php.
 *
 * @package portabello
 */

/**
 * Dynamically adds company info to the footer of every page.
 *
 */

function mm4_footer_colophon() {
    $address = get_theme_mod( 'setting_address' );
    $city    = get_theme_mod( 'setting_city' );
    $state   = get_theme_mod( 'setting_state' );
    $zip     = get_theme_mod( 'setting_zipcode' );
    $phone   = get_theme_mod( 'setting_phone' );
    $fax   = get_theme_mod( 'setting_fax' );
    $email   = get_theme_mod( 'setting_email' );
    ?>
    <div class="footer-address-section">
        <div class="footer-address">
            <h4>Portabello Apartments</h4>
            <span><?php echo $address; ?>,</span>
            <span><?php echo $city; ?>,</span>
            <span><?php echo $state; ?></span>
            <span><?php echo $zip; ?></span><br>
            <span>Phone: <?php echo $phone; ?> &#8226; </span>
            <span>Fax: <?php echo $fax; ?></span><br>
            <span>Email: <?php echo $email; ?></span>
        </div>
    </div>
    <div class="footer-awards">
    </div>
    <div class="footer-social">
    </div>
    <?php
}
