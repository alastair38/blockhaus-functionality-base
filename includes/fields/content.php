<?php

/**
 * Adds content fields to the post type edit options
 *
 * @package blockhaus
 */

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_62b1e2cd90a7e',
    'title' => 'Header layout',
    'fields' => array(
      array(
        'key' => 'field_62b1e2d7fc282',
        'label' => 'Use transparent image layout',
        'name' => 'transparent_image_layout',
        'type' => 'true_false',
        'instructions' => 'Turn this on if you are using a transparent image / graphic as the header for this page. This will offset the image to the right of the title and show the background colour through the image transparency.',
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
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_62c6ba063be46',
        'label' => 'Background color',
        'name' => 'choose_background',
        'type' => 'radio',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => 'color-switcher',
          'id' => '',
        ),
        'choices' => array(
          'accent' => 'accent',
          'offset' => 'offset',
          'highlight' => 'highlight',
          'accent-secondary' => 'accent-secondary',
          'accent-tertiary' => 'accent-tertiary',
        ),
        'allow_null' => 1,
        'other_choice' => 0,
        'default_value' => '',
        'layout' => 'vertical',
        'return_format' => 'value',
        'save_other_choice' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
      ),
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
        ),
      ),
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'story',
        ),
      ),
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'project',
        ),
      ),
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'resource',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));
  
  acf_add_local_field_group(array(
    'key' => 'group_629a6742c9307',
    'title' => 'Social Sharing',
    'fields' => array(
      array(
        'key' => 'field_629a6759f84f7',
        'label' => '',
        'name' => 'sharing_enabled',
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
        'default_value' => 1,
        'ui' => 1,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '!=',
          'value' => 'page',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));

  acf_add_local_field_group(array(
    'key' => 'group_62beb7b80c718',
    'title' => 'External Link',
    'fields' => array(
      array(
        'key' => 'field_62beb80218002',
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
        'message' => 'If this piece of content refers to an external blog post or something similar, add the external link here. This will override the \'View Article\' link and direct site visitors to the external content.',
        'new_lines' => 'wpautop',
        'esc_html' => 0,
      ),
      array(
        'key' => 'field_62beb88718003',
        'label' => 'Name of original site',
        'name' => 'external_site',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_62beb8bf18004',
        'label' => 'Link to original content',
        'name' => 'external_link',
        'type' => 'url',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '!=',
          'value' => 'page',
        ),
      ),
    ),
    'menu_order' => 10,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));
  
  endif;		
