<?php

/**
 * Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blockhaus-test-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockhaus-test p-6 flex items-center gap-6 bg-gray-100 rounded-md';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( !empty($block['textColor']) ) {
  $className .= ' has-' . $block['textColor'] . '-color has-text-color';
}

if( !empty($block['backgroundColor']) ) {
  $className .= ' has-' . $block['backgroundColor'] . '-background-color has-background';
}

?>

<aside id="<?php echo $id;?>" class="<?php echo esc_attr($className); ?>">
  
  <?php if(function_exists('get_field')):
  the_field('test_text');
  endif;?>
  
</aside>
