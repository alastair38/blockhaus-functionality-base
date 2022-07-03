<?php

/**
 * Adds fields to registered blocks used by Blockhaus
 *
 * @package blockhaus
 */


if( function_exists('acf_add_local_field_group') ):

/* FIELD TO SELECT POST OBJECTS USING THE CONTENT LINKS GRID BLOCK */

  acf_add_local_field_group(array(
    'key' => 'group_6297484bc09dd',
    'title' => 'Content links',
    'fields' => array(
      array(
        'key' => 'field_6297484be99b4',
        'label' => 'Select Content Items',
        'name' => 'content_links',
        'type' => 'post_object',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array(
          0 => 'page',
          1 => 'story',
          2 => 'project',
          3 => 'post',
          4 => 'resource',
        ),
        'taxonomy' => '',
        'allow_null' => 0,
        'multiple' => 1,
        'return_format' => 'object',
        'ui' => 1,
      ),
      array(
        'key' => 'field_62a3494e38f2a',
        'label' => 'Select Content Items (copy)',
        'name' => 'content_links_copy',
        'type' => 'post_object',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array(
          0 => 'page',
          1 => 'story',
          2 => 'project',
          3 => 'post',
        ),
        'taxonomy' => '',
        'allow_null' => 0,
        'multiple' => 1,
        'return_format' => 'object',
        'ui' => 1,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'acf/content-links-grid',
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

  acf_add_local_field_group(array(
    'key' => 'group_62b9c663728b3',
    'title' => 'Archive Links Grid',
    'fields' => array(
      array(
        'key' => 'field_62b9c66af102f',
        'label' => 'Choose links',
        'name' => 'archive_links',
        'type' => 'repeater',
        'instructions' => 'Link to content type archives (eg: the Stories or projects pages). To link to standard pages or content items, use the \'Content Links Grid\' instead.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'block',
        'button_label' => 'Add archive link',
        'sub_fields' => array(
          array(
            'key' => 'field_62b9c949cbe3b',
            'label' => 'Title text',
            'name' => 'link_text',
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
            'key' => 'field_62b9c884eaf6f',
            'label' => 'Link',
            'name' => 'link',
            'type' => 'page_link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'post_type' => array(
              0 => 'post',
              1 => 'page',
              2 => 'story',
              3 => 'project',
            ),
            'taxonomy' => '',
            'allow_null' => 1,
            'allow_archives' => 1,
            'multiple' => 0,
          ),
          array(
            'key' => 'field_62b9c8ceeaf70',
            'label' => 'Image to show with link',
            'name' => 'link_image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'id',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'acf/archive-links-grid',
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
  
  acf_add_local_field_group(array(
    'key' => 'group_62c075a540764',
    'title' => 'External Links Grid',
    'fields' => array(
      array(
        'key' => 'field_62c075a548256',
        'label' => 'Choose links',
        'name' => 'external_links',
        'type' => 'repeater',
        'instructions' => 'Link to external website content or resources . To link to standard pages or content items from this website, use the \'Content Links Grid\' instead.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'block',
        'button_label' => 'Add external link',
        'sub_fields' => array(
          array(
            'key' => 'field_62c075a54c093',
            'label' => 'Title text',
            'name' => 'link_text',
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
            'key' => 'field_62c075a54fb36',
            'label' => 'Link',
            'name' => 'link',
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
            'placeholder' => 'External content link (should start \'https://\').',
          ),
          array(
            'key' => 'field_62c075a55364a',
            'label' => 'Image to show with link',
            'name' => 'link_image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'id',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'acf/external-links-grid',
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