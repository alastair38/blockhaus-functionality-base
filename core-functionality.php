<?php
/*
Plugin name: Blockhaus Base Functionality
Description: Custom fields and Gutenberg blocks
Text Domain: blockhaus
*/

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', plugin_dir_path( __FILE__ ) . '/includes/acf/' );
// define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );

define( 'MY_ACF_URL', plugins_url( '/includes/acf/', __FILE__ ) );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return true;
}

define( 'MY_PLUGIN_DIR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) . '/includes/' ) );add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // Update path
    $path = MY_PLUGIN_DIR_PATH. '/acf-json';
    // Return path
    return $path;
    
}

// Add options page

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' => 'dashicons-admin-generic',
		'update_button' => __('Update Theme Options', 'acf'),
	));

}

/* Register the Overview message for the top of the Theme Options page  */

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_6299dedce59b7',
        'title' => 'Overview',
        'fields' => array(
            array(
                'key' => 'field_6299deeb40c2d',
                'label' => '',
                'name' => '',
                'type' => 'message',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => 'The information that you set on the options page is available across the site to be used by any compatible theme. If you change your theme (but keep the functionality plugin enabled) this information will still be available, but your new theme will need to be slightly modified in order to display this information in areas such as the footer.
    
                For your convenience, this information can still be accessed using the custom address, phone and social media blocks that are bundled with the functionality plugin. This allows you to drop the information into any content item that supports the new Wordpress block editor.',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-options',
                ),
            ),
        ),
        'menu_order' => -1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
endif;		

// Include file to register ACF fields for registered blocks

include( plugin_dir_path( __FILE__ ) . 'includes/fields/blocks.php');


// Include file to register Block Patterns

include( plugin_dir_path( __FILE__ ) . 'includes/blocks/block-patterns.php');

/**
 * Load Blocks
 */
function blockhaus_load_blocks() {
    register_block_type( plugin_dir_path( __FILE__ ) . '/includes/blocks/archive-links/block.json' );
	register_block_type( plugin_dir_path( __FILE__ ) . '/includes/blocks/curved-separator/block.json' );
    register_block_type( plugin_dir_path( __FILE__ ) . '/includes/blocks/profile/block.json' );

}
add_action( 'init', 'blockhaus_load_blocks' );

/**
 * Adding a new (custom) block category.
 *
 * @param   array $block_categories                         Array of categories for block types.
 */
function blockhaus_add_new_block_category( $block_categories ) {
	
	return array_merge(
		$block_categories,
		[
			[
				'slug'  => 'blockhaus',
				'title' => esc_html__( 'Blockhaus', 'blockhaus' ),
				'icon'  => 'schedule', // Slug of a WordPress Dashicon or custom SVG
			],
		]
	);
}

add_filter( 'block_categories_all', 'blockhaus_add_new_block_category' );