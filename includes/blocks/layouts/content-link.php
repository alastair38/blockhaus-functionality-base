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
$id = 'blockhaus-select-page-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockhaus-select-page';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$link = get_field('content_link');

?>

<aside id="<?php echo $id;?>">
  
<?php if($link) {
  // var_dump($link);
  ?>
  <?php if(is_admin()) {?>
    <a class="flex flex-wrap w-full group items-center justify-center gap-3 px-6 py-12 bg-gray-100 rounded-md"><span class="bg-yellow-300 group-focus:bg-white group-hover:bg-white transition-all duration-200 group-focus:-rotate-2 group-hover:-rotate-2 border border-current w-fit px-2 shadow-retro inline-flex -rotate-1">Read More</span><span class="font-bold"><?php echo get_the_title($link->ID);?></span></a>
  <?php } else {?>
    <a class="flex flex-wrap w-full group items-center justify-center gap-3 px-6 py-12 bg-gray-100 rounded-md" href="<?php echo get_the_permalink($link->ID);?>"><span class="bg-yellow-300 group-focus:bg-white group-hover:bg-white transition-all duration-200 group-focus:-rotate-2 group-hover:-rotate-2 border border-current w-fit px-2 shadow-retro inline-flex -rotate-1">Read More</span><span class="font-bold"><?php echo get_the_title($link->ID);?></span></a>
 <?php }
 }?>

</aside>
