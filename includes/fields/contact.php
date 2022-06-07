<?php

/**
 * Adds Contact details fields to the Theme options page
 *
 * @package blockhaus
 */

function blockhaus_acf_add_address_field_groups() {

  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
      'key' => 'group_6299dbfd6az99',
      'title' => 'Address',
      'fields' => array(
        array(
          'key' => 'field_6299dc2614e93',
          'label' => 'First line',
          'name' => 'first_line',
          'type' => 'text',
          'instructions' => '<p>Add a first line to your address. To use this in a theme template, use the following code:</p><code>$first_line = get_field("first_line", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Enter the first line of your address ...',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
        ),
        array(
          'key' => 'field_6299dc3614e94',
          'label' => 'Second line',
          'name' => 'second_line',
          'type' => 'text',
          'instructions' => '<p>Add a second line to your address. To use this in a theme template, use the following code:</p><code>$second_line = get_field("second_line", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Enter the second line of your address ...',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
        ),
        array(
          'key' => 'field_6299dc4014e95',
          'label' => 'Town or City',
          'name' => 'town_city',
          'type' => 'text',
          'instructions' => '<p>Add a town / city to your address. To use this in a theme template, use the following code:</p><code>$town_city = get_field("town_city", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Enter your town or city ...',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
        ),
        array(
          'key' => 'field_6299dc5e14e96',
          'label' => 'Region',
          'name' => 'region',
          'type' => 'text',
          'instructions' => '<p>Add a region to your address. To use this in a theme template, use the following code:</p><code>$region = get_field("region", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Enter your region ...',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
        ),
        array(
          'key' => 'field_6299dc6914e97',
          'label' => 'Postcode',
          'name' => 'postcode',
          'type' => 'text',
          'instructions' => '<p>Add a postcode to your address. To use this in a theme template, use the following code:</p><code>$postcode = get_field("postcode", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Enter your postcode ...',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
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
}

add_action('acf/init', 'blockhaus_acf_add_address_field_groups');


function blockhaus_acf_add_phone_field_groups() {

  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
      'key' => 'group_6299dbfd6af89',
      'title' => 'Phone numbers',
      'fields' => array(
        array(
          'key' => 'field_6299dcaa2b83b',
          'label' => 'Landline',
          'name' => 'landline_number',
          'type' => 'text',
          'instructions' => '<p>Add a landline number. To use this in a theme template, use the following code:</p><code>$landline = get_field("landline_number", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Enter your landline number ...',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
        ),
        array(
          'key' => 'field_6299dcbb2b83c',
          'label' => 'Mobile',
          'name' => 'mobile_number',
          'type' => 'text',
          'instructions' => '<p>Add a mobile number. To use this in a theme template, use the following code:</p><code>$mobile = get_field("mobile_number", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Enter your mobile number ...',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
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
	
}

add_action('acf/init', 'blockhaus_acf_add_phone_field_groups');