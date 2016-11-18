
function mm4_lat_lng() {

    if(is_page_template('page-contact-page.php')) {
        if(function_exists('get_field')) {
            $lat = get_field('latitude', 'option');
            $lng = get_field('longitude', 'option');
        }
        if($lat && $lng) { ?>

            <script>
                var latitude = <?php echo $lat; ?>;
                var longitude = <?php echo $lng; ?>;
            </script>

        <?php }
    }
} // mm4_lat_lng()

add_action('wp_footer', 'mm4_lat_lng');





function mm4_lat_lng() { ?>
    <script>
        var latitude = 38.800410;
        var longitude = -76.987104;
    </script>

    <?php
}

add_action('wp_footer', 'mm4_lat_lng');