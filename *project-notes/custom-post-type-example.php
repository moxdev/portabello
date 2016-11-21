
// Register Custom Post Type
function flats_at_shady_grove_create_custom_posts() {

    // Landmarks
    $labels2 = array(
        'name'                  => _x( 'Landmarks', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Landmark', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Landmarks', 'text_domain' ),
        'name_admin_bar'        => __( 'Landmarks', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Landmarks', 'text_domain' ),
        'add_new_item'          => __( 'Add New Landmark', 'text_domain' ),
        'add_new'               => __( 'Add New Landmark', 'text_domain' ),
        'new_item'              => __( 'New Landmark', 'text_domain' ),
        'edit_item'             => __( 'Edit Landmark', 'text_domain' ),
        'update_item'           => __( 'Update Landmark', 'text_domain' ),
        'view_item'             => __( 'View Landmark', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args2 = array(
        'label'                 => __( 'Landmark', 'text_domain' ),
        'description'           => __( 'Post Type Description', 'text_domain' ),
        'labels'                => $labels2,
        'supports'              => array( 'title', 'revisions', ),
        'taxonomies'            => array( 'landmark_types' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-location-alt',
        'show_in_rest'          => 'true',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );

    register_post_type( 'floor-plans', $args );
    register_post_type( 'landmarks', $args2 );

}
add_action( 'init', 'flats_at_shady_grove_create_custom_posts', 0 );