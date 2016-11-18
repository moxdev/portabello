/**
 * Global Website Information
 */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Website Information',
        'menu_slug'     => 'global-info',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Contact Information',
        'menu_title'    => 'Contact Info',
        'menu_slug'     => 'contact-info',
        'parent_slug'   => 'global-info',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Specials',
        'menu_title'    => 'Current Special',
        'menu_slug'     => 'specials',
        'parent_slug'   => 'global-info',
    ));

acf_add_options_sub_page(array(
        'page_title'    => 'Application',
        'menu_title'    => 'Rental Application',
        'menu_slug'     => 'application',
        'parent_slug'   => 'global-info',
    ));
}

