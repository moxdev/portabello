<div id="map-canvas"></div>
<form id="get-directions">
	<label>Starting Address:
		<input type="text" id="start">
		<input type="hidden" id="end" value="<?php echo $lat . ', ' . $lng; ?>">
	</label>
	<div id="response-panel"></div>
	<input type="submit" value="Get Directions">
</form>



add_action('wp_footer', 'tysons_towers_lat_lng');
    function tysons_towers_lat_lng() {
        if(is_page_template('page-contact.php')) {
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
}
If you are going to give the ability to change the lat/lng in the Dashboard, this is how I am putting that information.
Again, it depends on what method you are using to let them maintain this,
This is using the ACF options page.
