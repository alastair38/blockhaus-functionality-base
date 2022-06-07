<?php

/**
 * Adds Social Media Profile fields to the Theme options page
 *
 * @package blockhaus
 */

function blockhaus_acf_add_socialmedia_field_groups() {

  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
      'key' => 'group_6299da2ad24fb',
      'title' => 'Social Media',
      'fields' => array(
        array(
          'key' => 'field_6299daa18fe9c',
          'label' => 'Facebook Profile',
          'name' => 'facebook_url',
          'type' => 'url',
          'instructions' => '<p>Enter the full URL / web address of your Facebook profile. To use this in a theme template, use the following code:</p><code>$facebook_url = get_field("facebook_url", "options");</code>',
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
        array(
          'key' => 'field_6299da3b4ec53',
          'label' => 'Instagram Profile',
          'name' => 'instagram_url',
          'type' => 'url',
          'instructions' => '<p>Enter the full URL / web address of your Instagram profile. To use this in a theme template, use the following code:</p><code>$instagram_url = get_field("instagram_url", "options");</code>',
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
        array(
          'key' => 'field_629dd7965b55e',
          'label' => 'Linkedin Profile',
          'name' => 'linkedin_url',
          'type' => 'url',
          'instructions' => '<p>Enter the full URL / web address of your Linkedin profile. To use this in a theme template, use the following code:</p><code>$linkedin_url = get_field("linkedin_url", "options");</code>',
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
        array(
          'key' => 'field_6299dae7b2eed',
          'label' => 'TikTok Channel',
          'name' => 'tiktok_url',
          'type' => 'url',
          'instructions' => '<p>Enter the full URL / web address of your TikTik channel. To use this in a theme template, use the following code:</p><code>$tiktok_url = get_field("tiktok_url", "options");</code>',
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
        array(
          'key' => 'field_6299da6506b47',
          'label' => 'Twitter Profile',
          'name' => 'twitter_url',
          'type' => 'url',
          'instructions' => '<p>Enter the full URL / web address of your Twitter profile. To use this in a theme template, use the following code:</p><code>$twitter_url = get_field("twitter_url", "options");</code>',
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
        array(
          'key' => 'field_6299dac16d68d',
          'label' => 'YouTube Channel',
          'name' => 'youtube_url',
          'type' => 'url',
          'instructions' => '<p>Enter the full URL / web address of your YouTube channel. To use this in a theme template, use the following code:</p><code>$youtube_url = get_field("youtube_url", "options");</code>',
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

  add_action('acf/init', 'blockhaus_acf_add_socialmedia_field_groups');