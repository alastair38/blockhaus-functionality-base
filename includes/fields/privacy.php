<?php

/**
 * Adds privacy fields to Theme Options
 *
 * @package blockhaus
 */

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_62a3655d382a6',
    'title' => 'Privacy settings',
    'fields' => array(
      array(
        'key' => 'field_62a36727a66f7',
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
        'message' => 'Turn this button on to display a \'cookie banner\' at the bottom of your website.',
        'new_lines' => 'wpautop',
        'esc_html' => 0,
      ),
      array(
        'key' => 'field_62a3656da52be',
        'label' => 'Cookies',
        'name' => 'cookies_set',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 1,
        'ui_on_text' => 'On',
        'ui_off_text' => 'Off',
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
  
  endif;		