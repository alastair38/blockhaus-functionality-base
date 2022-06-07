<?php

/**
 * Adds SEO fields to the Theme options page
 *
 * @package blockhaus
 */


function blockhaus_acf_add_seo_field_groups() {
if( function_exists('acf_add_local_field_group') ):

    // get registered public custom post types
    $args = array(
      'public'   => true,
      '_builtin' => false
     );
    
    $output = 'names'; // 'names' or 'objects' (default: 'names')
    $operator = 'and'; // 'and' or 'or' (default: 'and')
      
    $post_types = get_post_types( $args, $output, $operator );

  acf_add_local_field_group(array(
    'key' => 'group_629de8ca1046c',
    'title' => 'SEO',
    'fields' => array(
      array(
        'key' => 'field_629de8d567703',
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
        'message' => 'You can add short, search-friendly descriptions here for the main pages of your content types. These descriptions will be available to search engines crawling these pages and provide a little more context than the default SEO tags generated.',
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
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));

  $field_key_new = uniqid();
  acf_add_local_field(array(
    'key' => 'field_' . $field_key_new,
    'label' => 'Blog/posts page description',
    'name' => 'blog_page_description',
    'type' => 'textarea',
    'instructions' => '<p>Add a short description for your Blog/Posts page. To use this in a theme template, use the following code:</p><code>$description = get_field("blog_page_description", "options");</code>',
    'parent' => 'group_629de8ca1046c',
    'maxlength' => 310,
  ));

  if ( $post_types ) { // If there are any custom public post types.
    foreach ( $post_types  as $post_type ) { // loop through
      $field_key = uniqid();
      $instructions = '<p>Add a short description for your ' . ucwords($post_type) . ' page. To use this in a theme template, use the following code:</p><code>$description = get_field("' . $post_type . '_page_description", "options");</code>';
      acf_add_local_field(array(
        'key' => 'field_' . $field_key,
        'label' => ucwords($post_type) . ' page description',
        'name' => $post_type . '_page_description',
        'type' => 'textarea',
        'instructions' => $instructions,
        'parent' => 'group_629de8ca1046c',
        'maxlength' => 310,
      ));
    }
  }

  endif;		

}

  add_action('acf/init', 'blockhaus_acf_add_seo_field_groups');