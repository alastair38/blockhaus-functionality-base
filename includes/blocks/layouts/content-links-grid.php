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
$links = get_field('content_links');
$links_copy = get_field('content_links_copy');

// var_dump($links);

if($links): 

$count = count($links);
if($count === 1) {
  $cols = 'md:grid-cols-1';
  $img_size = 'profile';
} else {
  $cols = 'md:grid-cols-2';
  $img_size = 'thumbnail';
}

endif;
?>

<aside id="<?php echo $id;?>" class="grid <?php echo $cols;?> gap-6 md:bg-neutral-light-100 rounded-md md:p-6">
  
<?php if($links) {
  
  foreach($links as $link) {
  
  $img = get_the_post_thumbnail($link->ID, $img_size, array( 'class' => 'w-full object-cover aspect-video md:aspect-auto md:w-auto bg-accent' ));

  if($img) {

  } else {

  }
  // var_dump($link);
  ?>
  <?php if(is_admin()) {?>
    <a class="flex flex-col md:flex-row group items-center bg-gray-100 md:bg-white rounded-md overflow-hidden">
      <?php if($img) {
        echo $img;
      } else {
        $img_atts = wp_get_attachment_image_src(578, $img_size);
        echo '<img class="w-full md:w-auto" src="' . $img_atts[0] . '" width="' . $img_atts[1] . '" height="' . $img_atts[2] . '">';

      }?>
      <div class="flex flex-col gap-2 p-6">
        <span class="font-bold"><?php echo get_the_title($link->ID);?></span>
        <span class="bg-yellow-300 group-focus:bg-white group-hover:bg-white transition-all duration-200 group-focus:-rotate-2 group-hover:-rotate-2 border border-current w-fit px-2 shadow-retro inline-flex -rotate-1">Read More</span>
      </div>
    </a>
  <?php } else {?>
    
    <a class="flex flex-col md:flex-row group items-center bg-gray-100 md:bg-white rounded-md overflow-hidden" href="<?php echo get_the_permalink($link->ID);?>" rel="bookmark" aria-label="Read <?php echo get_the_title($link->ID);?>">
      <?php if($img) {
        echo $img;
      } else {
        $img_atts = wp_get_attachment_image_src(578, $img_size);
        echo '<img class="w-full md:w-auto" src="' . $img_atts[0] . '" width="' . $img_atts[1] . '" height="' . $img_atts[2] . '">';

      }?>
      <div class="flex flex-col gap-2 p-6">
        <span class="font-bold"><?php echo get_the_title($link->ID);?></span>
        <span class="bg-yellow-300 group-focus:bg-white group-hover:bg-white transition-all duration-200 group-focus:-rotate-2 group-hover:-rotate-2 border border-current w-fit px-2 shadow-retro inline-flex -rotate-1">Read More</span>
      </div>
    </a>
 <?php }
  }
 }?>

</aside>
