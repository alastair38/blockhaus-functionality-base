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
$id = 'blockhaus-curve-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockhaus-curve col-span-full w-full row-start-1 z-10 place-self-end';
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

<div aria-hidden="true" id="<?php echo $id;?>" class="<?php echo esc_attr($className); ?>">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220"><path fill="currentColor" fill-opacity="1" d="M0,64L60,58.7C120,53,240,43,360,58.7C480,75,600,117,720,128C840,139,960,117,1080,112C1200,107,1320,117,1380,122.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
</div>
