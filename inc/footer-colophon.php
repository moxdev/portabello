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
        <span><img class="satifacts-logo" src="<?php echo get_template_directory_uri() . '/images/satisfacts_resident_award_2016.jpg' ?>" alt="satifacts resident 2016 award logo"></span>
        <span><img class="grady-management-logo" src="<?php echo get_template_directory_uri() . '/images/grady-management-logo.png' ?>" alt="grady management logo exceptional people exceptional communinties"></span>
    </div>
    <div class="footer-social">
        <span><a href="https://www.facebook.com/Portabello-Apartments-1466869373626592/"><svg id="facebook-svg" data-name="facebook svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 41.71 41.88"><defs><clipPath id="clip-path" transform="translate(-285 -378.12)"><rect x="276" y="370.87" width="59.71" height="50.13" style="fill:none"/></clipPath></defs><title>facebook-icon</title><g style="clip-path:url(#clip-path)"><path d="M310.44,419.84h-4.58V420h3.76a6.59,6.59,0,0,0,.82-.16M326.71,413V385a6.85,6.85,0,0,0-6.84-6.85h-28A6.85,6.85,0,0,0,285,385v28a6.85,6.85,0,0,0,6.84,6.84h14V407a2.63,2.63,0,0,0-2.63-2.81H300.6v-6.53h5.26v-3.28c0-4.71,3.53-8.54,7.88-8.54H319v6.5h-5.26c-.62,0-1.31.84-1.31,2v3.35H319v6.53h-6.57v13a2.49,2.49,0,0,1-2,2.64h9.43a6.85,6.85,0,0,0,6.84-6.84" transform="translate(-285 -378.12)" style="fill:#7d7e81"/></g></svg></a></span>

        <span><svg id="equal-housing-opportunity-svg" data-name="equal housing opportunity" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 37.56 41.76"><defs><clipPath id="clip-path" transform="translate(-287 -375.24)"><rect x="287" y="375.24" width="37.56" height="41.76" style="fill:none"/></clipPath></defs><title>equal-housing-opportunity-icon</title><g style="clip-path:url(#clip-path)"><path d="M317.94,400.88H293.81V387.63l11.92-7.38a122.87,122.87,0,0,1,12.2,7.38Zm-12.68-25.64-18.26,11v4.45h2.37l.05,13.91H322.1v-13.9h2.46v-4.07c-6.24-4.16-12.77-7.66-19.3-11.35" transform="translate(-287 -375.24)" style="fill:#7d7e81"/></g><rect x="12.37" y="18.64" width="12.49" height="3.97" style="fill:#7d7e81"/><rect x="12.35" y="13.59" width="12.49" height="3.97" style="fill:#7d7e81"/><polygon points="4.44 35.38 2.25 35.38 2.25 31.24 4.41 31.24 4.41 31.73 2.65 31.73 2.65 33.01 4.28 33.01 4.28 33.5 2.65 33.5 2.65 34.89 4.44 34.89 4.44 35.38" style="fill:#7d7e81"/><g style="clip-path:url(#clip-path)"><path d="M293.51,409.42l.38.41a2.24,2.24,0,0,0,.33-1.28c0-1-.39-1.69-1-1.69s-1,.71-1,1.69.39,1.68,1,1.68a.75.75,0,0,0,.44-.13l-.31-.33Zm.89,1.52-.46-.49a1.12,1.12,0,0,1-.77.28c-1.11,0-1.45-1.29-1.45-2.18s.34-2.18,1.45-2.18,1.45,1.29,1.45,2.18a3,3,0,0,1-.43,1.62l.41.44Z" transform="translate(-287 -375.24)" style="fill:#7d7e81"/><path d="M297.38,406.48v2.69c0,.85-.38,1.57-1.2,1.57S295,410,295,409.24v-2.76h.4v2.61c0,.9.39,1.15.75,1.15s.78-.24.78-1.14v-2.62Z" transform="translate(-287 -375.24)" style="fill:#7d7e81"/></g><path d="M299.45,408.92,299,407.1h0l-.48,1.82Zm-1,.5-.31,1.21h-.41l1.12-4.14h.46l1.08,4.14h-.44l-.29-1.21Z" transform="translate(-287 -375.24)" style="fill:#7d7e81"/><polygon points="14.02 34.89 15.52 34.89 15.52 35.38 13.61 35.38 13.61 31.24 14.02 31.24 14.02 34.89" style="fill:#7d7e81"/><polygon points="18.86 31.24 19.27 31.24 19.27 35.38 18.86 35.38 18.86 33.45 17.31 33.45 17.31 35.38 16.91 35.38 16.91 31.24 17.31 31.24 17.31 32.95 18.86 32.95 18.86 31.24" style="fill:#7d7e81"/><g style="clip-path:url(#clip-path)"><path d="M308.11,406.87c-.65,0-1,.71-1,1.68s.39,1.68,1,1.68,1-.71,1-1.68-.39-1.68-1-1.68m0,3.87c-1.11,0-1.45-1.29-1.45-2.18s.34-2.18,1.45-2.18,1.45,1.29,1.45,2.18-.34,2.18-1.45,2.18" transform="translate(-287 -375.24)" style="fill:#7d7e81"/><path d="M311.9,406.48v2.62c0,.9-.41,1.14-.78,1.14s-.75-.25-.75-1.15v-2.61H310v2.76c0,.77.34,1.49,1.14,1.49s1.2-.72,1.2-1.57v-2.69Z" transform="translate(-287 -375.24)" style="fill:#7d7e81"/><path d="M314.65,407.69c0-.64-.4-.84-.74-.84a.64.64,0,0,0-.68.73.48.48,0,0,0,.35.52l.85.27a1,1,0,0,1,.67,1.11,1.11,1.11,0,0,1-1.16,1.25,1,1,0,0,1-.9-.4,1.57,1.57,0,0,1-.3-1h.38c0,.75.44,1,.82,1a.69.69,0,0,0,.78-.7c0-.43-.15-.57-.63-.73l-.61-.2a.91.91,0,0,1-.63-1c0-.65.3-1.28,1-1.28,1,0,1.14.87,1.16,1.32Z" transform="translate(-287 -375.24)" style="fill:#7d7e81"/></g><rect x="28.6" y="31.24" width="0.4" height="4.14" style="fill:#7d7e81"/><polygon points="31.58 31.24 31.97 31.24 31.97 35.38 31.52 35.38 30.01 32.03 30 32.03 30 35.38 29.61 35.38 29.61 31.24 30.08 31.24 31.57 34.59 31.58 34.59 31.58 31.24" style="fill:#7d7e81"/><g style="clip-path:url(#clip-path)"><path d="M320.81,408.41h1.3v2.22h-.26l-.1-.54a1.13,1.13,0,0,1-1,.65,1,1,0,0,1-.91-.47,2.78,2.78,0,0,1-.47-1.75c0-1,.44-2.15,1.41-2.15a1.35,1.35,0,0,1,1.26,1.37h-.39c-.13-.72-.56-.87-.89-.87-.53,0-1,.59-1,1.68,0,.84.2,1.71,1,1.71a.77.77,0,0,0,.61-.26,1.55,1.55,0,0,0,.33-1.1h-.93Z" transform="translate(-287 -375.24)" style="fill:#7d7e81"/><path d="M290.58,413.13c-.76,0-1.21.71-1.21,1.68s.46,1.68,1.21,1.68,1.21-.71,1.21-1.68-.46-1.68-1.21-1.68m0,3.87c-1.3,0-1.69-1.29-1.69-2.18s.4-2.18,1.69-2.18,1.69,1.29,1.69,2.18-.4,2.18-1.69,2.18" transform="translate(-287 -375.24)" style="fill:#7d7e81"/><path d="M293.26,414.66h.93c.42,0,.71-.18.71-.74a.61.61,0,0,0-.69-.69h-1Zm0,2.23h-.47v-4.14h1.56a1,1,0,0,1,1,1.17c0,.58-.27,1.23-1,1.23h-1.09Z" transform="translate(-287 -375.24)" style="fill:#7d7e81"/><path d="M296.39,414.66h.93c.42,0,.71-.18.71-.74a.61.61,0,0,0-.69-.69h-1Zm0,2.23h-.47v-4.14h1.56a1,1,0,0,1,1,1.17c0,.58-.28,1.23-1,1.23h-1.09Z" transform="translate(-287 -375.24)" style="fill:#7d7e81"/><path d="M300.52,413.13c-.76,0-1.21.71-1.21,1.68s.45,1.68,1.21,1.68,1.21-.71,1.21-1.68-.45-1.68-1.21-1.68m0,3.87c-1.3,0-1.69-1.29-1.69-2.18s.4-2.18,1.69-2.18,1.69,1.29,1.69,2.18-.4,2.18-1.69,2.18" transform="translate(-287 -375.24)" style="fill:#7d7e81"/><path d="M303.2,414.63h1.09c.34,0,.71-.11.71-.72s-.39-.69-.62-.69H303.2Zm0,2.26h-.47v-4.14h1.61a1,1,0,0,1,1.14,1.12,1.05,1.05,0,0,1-.48,1c.2.1.4.2.42.78l0,.75c0,.23,0,.32.17.42v.09H305a6,6,0,0,1-.08-1c0-.34-.06-.74-.62-.74H303.2Z" transform="translate(-287 -375.24)" style="fill:#7d7e81"/></g><polygon points="18.77 37.51 18.77 38 19.95 38 19.95 41.65 20.42 41.65 20.42 38 21.6 38 21.6 37.51 18.77 37.51" style="fill:#7d7e81"/><g style="clip-path:url(#clip-path)"><path d="M311.22,412.75v2.62c0,.9-.48,1.14-.92,1.14s-.88-.25-.88-1.15v-2.61H309v2.76a1.33,1.33,0,0,0,1.34,1.49,1.39,1.39,0,0,0,1.4-1.57v-2.69Z" transform="translate(-287 -375.24)" style="fill:#7d7e81"/></g><polygon points="27.64 37.51 27.64 40.85 27.63 40.85 25.89 37.51 25.33 37.51 25.33 41.65 25.79 41.65 25.79 38.3 25.8 38.3 27.57 41.65 28.09 41.65 28.09 37.51 27.64 37.51" style="fill:#7d7e81"/><rect x="28.81" y="37.51" width="0.47" height="4.14" style="fill:#7d7e81"/><polygon points="29.68 37.51 29.68 38 30.86 38 30.86 41.65 31.33 41.65 31.33 38 32.51 38 32.51 37.51 29.68 37.51" style="fill:#7d7e81"/><polygon points="35.09 37.51 34.09 39.5 33.09 37.51 32.55 37.51 33.86 39.98 33.86 41.65 34.33 41.65 34.33 39.98 35.64 37.51 35.09 37.51" style="fill:#7d7e81"/></svg></span>
    </div>
    <?php
}
