<?php
/**
 * Metro Village Apartments functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Metro_Village_Apartments
 */

if ( ! function_exists( 'metro_village_apartments_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function metro_village_apartments_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Metro Village Apartments, use a find and replace
	 * to change 'metro-village-apartments' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'metro-village-apartments', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('home-feature', 2500, 1165, false);
	add_image_size('gallery-thumb', 258, 194, true);
	add_image_size('gallery-main', 1400, 1000, false);
	add_image_size('plan-thumb', 300, 9999, false);
	add_image_size('plan-main', 900, 9999, false);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'metro-village-apartments' ),
		'footer' => esc_html__( 'Footer Menu', 'metro-village-apartments' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	/*add_theme_support( 'custom-background', apply_filters( 'metro_village_apartments_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );*/
}
endif; // metro_village_apartments_setup
add_action( 'after_setup_theme', 'metro_village_apartments_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function metro_village_apartments_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'metro_village_apartments_content_width', 640 );
}
add_action( 'after_setup_theme', 'metro_village_apartments_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function metro_village_apartments_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Global Sidebar', 'metro_village_apartments' ),
		'id'            => 'sidebar-global',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'metro_village_apartments' ),
		'id'            => 'sidebar-blog',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
//add_action( 'widgets_init', 'metro_village_apartments_widgets_init' );

function register_jquery()  {  
	if (!is_admin()) {  
		wp_deregister_script('jquery');  
        // Load the copy of jQuery that comes with WordPress  
        // The last parameter set to TRUE states that it should be loaded in the footer.  
        wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', FALSE, FALSE, TRUE);  
    }  
}  
add_action('init', 'register_jquery');

/**
 * Enqueue scripts and styles.
 */
function metro_village_apartments_scripts() {
	wp_enqueue_style( 'metro-village-apartments-style', get_stylesheet_uri() );

	wp_enqueue_script( 'metro-village-apartments-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20120206', true );
	
	if( has_post_thumbnail() && is_page_template('frontpage.php') || is_page_template('page-amenities.php') ) {
		wp_enqueue_script( 'metro-village-apartments-images-loaded', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js', array('jquery'), '20150908', true );
		wp_enqueue_script( 'metro-village-apartments-image-fill', get_template_directory_uri() . '/js/jquery-imagefill.min.js', array('jquery', 'metro-village-apartments-images-loaded'), '20150908', true );
	}
	
	if( is_page_template('page-photo-gallery.php') ) {
		if( function_exists('get_field') ) {
			if( have_rows('images') ) {
				wp_enqueue_script( 'metro-village-apartments-lightbox-min', get_template_directory_uri() . '/js/imagelightbox.min.js', array('jquery'), '20151123', true );
				wp_enqueue_script( 'metro-village-apartments-overlay', get_template_directory_uri() . '/js/overlay.js', array('jquery', 'metro-village-apartments-lightbox-min'), '20151123', true );
			}
		}
	}
	
	if( is_page_template('page-floor-plans.php') ) {
		if( function_exists('get_field') ) {
			wp_enqueue_script( 'metro-village-apartments-lightbox-min', get_template_directory_uri() . '/js/imagelightbox.min.js', array('jquery'), '20151123', true );
			wp_enqueue_script( 'metro-village-apartments-overlay', get_template_directory_uri() . '/js/overlay.js', array('jquery', 'metro-village-apartments-lightbox-min'), '20151123', true );
		}
	}
	
	if( is_page_template('page-neighborhood.php') ) {
		wp_enqueue_script( 'metro-village-apartments-google-map-api', 'http://maps.google.com/maps/api/js', array(), '', true );
		wp_enqueue_script( 'metro-village-apartments-area-map-spider-markers', get_template_directory_uri() . '/js/oms.min.js', array('metro-village-apartments-google-map-api'), '20150109', true );
		wp_enqueue_script( 'metro-village-apartments-area-map', get_template_directory_uri('jquery', 'metro-village-apartments-google-map-api', 'metro-village-apartments-area-map-spider-markers') . '/js/area-map.js', array(), '20150109', true );
	}
	
	if (is_page_template('page-contact.php') ) {
		wp_enqueue_script( 'metro-village-apartments-validate-lib', get_template_directory_uri() . '/js/validate.min.js', array('jquery'), '20150701', true );
		wp_enqueue_script( 'metro-village-apartments-validate', get_template_directory_uri() . '/js/form-validate.js', array('jquery'), '20150701', true );
		wp_enqueue_script( 'metro-village-apartments-google-map-api', 'http://maps.google.com/maps/api/js', array(), '', true );
		wp_enqueue_script( 'metro-village-apartments-directions', get_template_directory_uri() . '/js/map-directions.js', array('jquery', 'metro-village-apartments-google-map-api'), '20150904', true );
	}

	wp_enqueue_script( 'metro-village-apartments-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'metro_village_apartments_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * HIDE EDITOR FOR PAGE TEMPLATES
 */
function hide_editor() {
	// Get the Post ID.
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	if( !isset( $post_id ) ) return;

	// Get the name of the Page Template file.
	$template_file = get_post_meta($post_id, '_wp_page_template', true);
    
    if($template_file == 'page-amenities.php'){ // edit the template name
    	remove_post_type_support('page', 'editor');
    }
}

add_action( 'admin_init', 'hide_editor' );

/*
 * CUSTOM POST STUFF
 */

function metro_village_apartments_create_custom_posts() {
	register_post_type( 'landmarks', 
		array(
			'labels' => array(
				'name' => __( 'Area Landmarks' ),
				'add_new' => __( 'Add New Landmark' ),
				'add_new_item' => __( 'Add New Landmark' ),
				'edit' => __( 'Edit' )
			),
			'supports' => array( 'title'),
			'public' => true,
			'menu_position' =>5,
			'menu_icon' => 'dashicons-location-alt',
			'has_archive' => false
		)
	);
}
add_action( 'init', 'metro_village_apartments_create_custom_posts' );

function metro_village_apartments_create_taxonomies() {
	register_taxonomy(
        'landmark-type',
        'landmarks',
        array(
            'labels' => array(
                'name' => 'Landmark Types',
                'add_new_item' => 'Add New Landmark Type',
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
			'hierarchical' => true,
			'has_archive'=>false
        )
    );
}
add_action( 'init', 'metro_village_apartments_create_taxonomies', 0 );

//Remove option for no type from radio button for taxonomies plugin
add_filter('radio-buttons-for-taxonomies-no-term-landmark-type', '__return_FALSE' );

/**
 * ADD STYLES TO WYSIWYG
 */
// Insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Use 'mce_buttons' for button row #1, mce_buttons_3' for button row #3
add_filter('mce_buttons_2', 'my_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) {
    $style_formats = array(
        array(
            'title' => 'Disclaimer', // Title to show in dropdown
            'inline' => 'span', // Element to add class to
            'classes' => 'disclaimer' // CSS class to add
        )
    );
    $init_array['style_formats'] = json_encode( $style_formats );
    return $init_array;
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

// EDITOR STYLES

function metro_village_apartments_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'metro_village_apartments_add_editor_styles' );

/**
 * AREA MAP
 */
 
function metro_village_apartments_community_map_tax_listing() {
	if( is_page_template('page-neighborhood.php') && function_exists('get_field') ) {
		global $post;
		$post_type = 'landmarks';
		$tax = 'landmark-type';
		$tax_terms = get_terms($tax);
		$cats = array();
		if ($tax_terms) {
			foreach ($tax_terms  as $tax_term) {	
				$name = $tax_term->name;
				$slug = $tax_term->slug;
				$desc = $tax_term-> description;
				$count = $tax_term->count;
				$catDetails = array ($name, $slug, $desc, $count);
				array_push($cats, $catDetails);
			}
		}
		//echo json_encode($cats);
		//print_r($cats);
		
		$args=array(
			'post_type' => $post_type,
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'caller_get_posts'=> 1
		);
		
		$poi = array();
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ): while ($my_query->have_posts()) : $my_query->the_post();
		$title = get_the_title();
		$lat = get_field('latitude');
		$lng = get_field('longitude');
		$add = get_field('address');
		$add2 = get_field('address_2');
		$phone = get_field('phone');
		$url = get_field('landmark_website');
		if($url) {
			$urlStr = $url;
		} else {
			$urlStr = '';
		}
		$adtlDetails = get_field('additional_details');
		if($adtlDetails) {
			$adtlDetailsStr = $adtlDetails;
		} else {
			$adtlDetailsStr = '';
		}
		$id = get_the_ID();
		$term_list = wp_get_post_terms($id, 'landmark-type');
		if($term_list) {
			foreach ($term_list as $term_list) {
				$slug = $term_list->slug;
			}
		}
		$details = array ($title, $lat, $lng, $add, $add2, $phone, $urlStr, $adtlDetailsStr, $slug);
		array_push($poi, $details);
		endwhile;
		endif;
		wp_reset_query();
		//print_r($poi)?>
        <script>var categories = <?php echo json_encode($cats); ?>; var locations = <?php echo json_encode($poi); ?></script>
	<?php }
}

add_action( 'wp_footer', 'metro_village_apartments_community_map_tax_listing' );