<?php
function register_acf_block_types() {

    // acf_register_block_type(array(
    //     'name'              => 'content-link',
    //     'title'             => __('Content Link'),
    //     'description'       => __('Link to any of your other content items'),
    //     'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/content-link.php',
    //     'category'          => 'widgets',
    //     'icon' => array(
    //     // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
    //       'foreground' => '#ff005d',
    //     // Specifying a dashicon for the block
    //       'src' => 'admin-links',
    //     ),
    //     'mode' => 'edit',
    //   'supports' => array( 
    //       'align' => false,
    //   ),
    //     //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
    //     'keywords'          => array( 'content', 'link' ),
    // ));

    acf_register_block_type(array(
      'name'              => 'content-links-grid',
      'title'             => __('Content Links Grid'),
      'description'       => __('Link to multiple content items using a grid layout'),
      'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/content-links-grid.php',
      'category'          => 'widgets',
      'icon' => array(
      // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
        'foreground' => '#ff005d',
      // Specifying a dashicon for the block
        'src' => 'admin-links',
      ),
      'mode' => 'preview',
    'supports' => array( 
        'align' => false,
    ),
      //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
      'keywords'          => array( 'content', 'link', 'links' ),
  ));


}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}