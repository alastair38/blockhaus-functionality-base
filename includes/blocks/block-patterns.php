<?php

register_block_pattern_category(
  'callouts-and-quotes',
  array( 'label' => __( 'Callouts and quotes', 'blockhaus' ) )
);

register_block_pattern_category(
  'social-media',
  array( 'label' => __( 'Social media', 'blockhaus' ) )
);

register_block_pattern_category(
  'users',
  array( 'label' => __( 'Users and profiles', 'blockhaus' ) )
);

register_block_pattern_category(
  'related-content',
  array( 'label' => __( 'Showing related content', 'blockhaus' ) )
);

function blockhaus_register_patterns() {

  register_block_pattern(
    'blockhaus/header-hero',
    array(
        'title'       => __( 'Hero Header', 'blockhaus' ),
        'categories'    => [
          'header',
        ],
        'content'     => '<!-- wp:group {"templateLock": "contentOnly", "tagName":"section","className":"grid grid-cols-1 md:grid-cols-hero place-items-center w-4/5 py-20 mx-auto","layout":{"inherit":true}} -->
        <section class="wp-block-group grid grid-cols-1 md:grid-cols-hero place-items-center w-4/5 py-20 mx-auto"><!-- wp:image {"id":578,"sizeSlug":"landscape","linkDestination":"none","className":"md:col-span-2 md:col-start-1 md:row-start-1 size-landscape aspect-video rounded-md p-2 -rotate-2 z-0 image"} -->
        <figure class="wp-block-image md:col-span-2 md:col-start-1 md:row-start-1 size-landscape aspect-video rounded-md p-2 -rotate-2 z-0 image"><img src="/wp-content/themes/blockhaus/assets/images/block-patterns/hero-header.jpg" alt="A woman sits in a doorway looking at her laptop" class="wp-image-578"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"bg-offset md:col-span-2 md:col-start-2 md:row-start-1 space-y-2 lg:space-y-6 p-6 self-center z-10","layout":{"inherit":false}} -->
        <div class="wp-block-group bg-offset md:col-span-2 md:col-start-2 md:row-start-1 space-y-2 lg:space-y-6 p-6 self-center z-10"><!-- wp:heading {"level":1,"className":"heading font-black leading-10","fontSize":"gigantic"} -->
        <h1 class="heading font-black leading-10 has-gigantic-font-size">Discover NeurOx YPAG</h1>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"className":"paragraph"} -->
        <p class="paragraph">Start your research journey here</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></section>
        <!-- /wp:group -->',
    )
);

  register_block_pattern(
     'blockhaus/profile-block',
     array(
         'title'       => __( 'Profile Block - Image Left', 'blockhaus' ),
         'categories'    => [
          'users',
        ],
         'content'     => '<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"blockhaus-profile flex-col md:flex-row flex gap-0 md:gap-12 py-6"} -->
         <div class="wp-block-group blockhaus-profile flex-col md:flex-row flex gap-0 md:gap-12 py-6"><!-- wp:image {"id":458,"sizeSlug":"profile","linkDestination":"none","className":"aspect-square min-w-fit max-w-fit"} -->
         <figure class="wp-block-image size-profile aspect-square min-w-fit max-w-fit"><img src="http://ypag.local/wp-content/uploads/2022/05/janko-ferlic-1nizzZ-SFw4-unsplash-3-300x300.jpg" alt="" class="wp-image-458"/></figure>
         <!-- /wp:image -->
         
         <!-- wp:group {"className":"self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"} -->
         <div class="wp-block-group self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"><!-- wp:heading {"className":"font-bold"} -->
         <h2 class="font-bold">Your name</h2>
         <!-- /wp:heading -->
         
         <!-- wp:paragraph -->
         <p>Age:</p>
         <!-- /wp:paragraph -->
         
         <!-- wp:paragraph -->
         <p>Why I joined YPAG:</p>
         <!-- /wp:paragraph -->
         
         <!-- wp:paragraph -->
         <p>What I have gained from YPAG:</p>
         <!-- /wp:paragraph -->
         
         <!-- wp:paragraph -->
         <p>Fun fact:</p>
         <!-- /wp:paragraph --></div>
         <!-- /wp:group --></div>
         <!-- /wp:group -->',
     )
 ); 

 register_block_pattern(
  'blockhaus/profile-block-alternate',
  array(
      'title'       => __( 'Profile Block - Image Right', 'blockhaus' ),
      'categories'    => [
        'users',
      ],
      'content'     => '<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"blockhaus-profile-alt flex-col-reverse justify-between md:flex-row flex gap-0 md:gap-12 py-6"} -->
      <div class="wp-block-group blockhaus-profile-alt flex-col-reverse justify-between md:flex-row flex gap-0 md:gap-12 py-6"><!-- wp:group {"className":"self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"} -->
      <div class="wp-block-group self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"><!-- wp:heading {"className":"font-bold"} -->
      <h2 class="font-bold">Your name</h2>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph -->
      <p>Age:</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:paragraph -->
      <p>Why I joined YPAG:</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:paragraph -->
      <p>What I have gained from YPAG:</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:paragraph -->
      <p>Fun fact:</p>
      <!-- /wp:paragraph --></div>
      <!-- /wp:group -->
      
      <!-- wp:image {"id":458,"sizeSlug":"profile","linkDestination":"none","className":"aspect-square min-w-fit max-w-fit"} -->
      <figure class="wp-block-image size-profile aspect-square min-w-fit max-w-fit"><img src="http://ypag.local/wp-content/uploads/2022/05/janko-ferlic-1nizzZ-SFw4-unsplash-3-300x300.jpg" alt="" class="wp-image-458"/></figure>
      <!-- /wp:image --></div>
      <!-- /wp:group -->',
  )
); 

 register_block_pattern(
  'blockhaus/cta',
  array(
      'title'       => __( 'Call to Action', 'blockhaus' ),
      'categories'    => [
        'callouts-and-quotes',
      ],
      'content'     => '<!-- wp:group {"templateLock": "contentOnly", "tagName":"section","style":{"spacing":{"blockGap":"0px"}},"className":"grid grid-hero place-items-center","layout":{"inherit":false}} -->
      <section class="wp-block-group grid grid-hero place-items-center"><!-- wp:image {"id":1350,"sizeSlug":"full","linkDestination":"none","className":"col-span-full col-start-1 row-start-1 z-0 image"} -->
      <figure class="wp-block-image size-full col-span-full col-start-1 row-start-1 z-0 image"><img src="http://blockhaus.local/wp-content/uploads/2022/06/michael-schofield-IhuzPxyBunQ-unsplash.jpg" alt="" class="wp-image-1350"/></figure>
      <!-- /wp:image -->
      
      <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"light-opacity","className":"hero-content backdrop-blur col-span-full md:col-span-2 col-start-1 row-start-1 md:col-start-2 md:row-start-1 space-y-2 lg:space-y-6 p-6 self-center z-10","layout":{"inherit":false}} -->
      <div class="wp-block-group hero-content backdrop-blur col-span-full md:col-span-2 col-start-1 row-start-1 md:col-start-2 md:row-start-1 space-y-2 lg:space-y-6 p-6 self-center z-10 has-light-opacity-background-color has-background"><!-- wp:heading {"level":1,"className":"heading font-black leading-10","fontSize":"gigantic"} -->
      <h1 class="heading font-black leading-10 has-gigantic-font-size">Trajectories</h1>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"className":"paragraph"} -->
      <p class="paragraph">The social science of developmental pathways to health from preconception to childhood in South Africa</p>
      <!-- /wp:paragraph --></div>
      <!-- /wp:group -->
      
      <!-- wp:blockhaus/curved-separator {"name":"blockhaus/curved-separator","data":{},"mode":"preview","textColor":"neutral-light-100"} /--></section>
      <!-- /wp:group -->
      ',
  )
); 

    register_block_pattern(
      'blockhaus/front-page-contact-form',
      array(
          'title'       => __( 'Contact Form - Front Page', 'blockhaus' ),
          'categories'    => [
            'callouts-and-quotes',
          ],
          'content'     => '
          <!-- wp:group {"tagName":"section","align":"full","className":"py-56 lg:py-32 w-3/4 mx-auto","layout":{"inherit":false}} -->
          <section class="wp-block-group alignfull py-[20%] w-3/4 mx-auto"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"gigantic"} -->
          <h2 class="has-gigantic-font-size" style="font-style:normal;font-weight:900">Contact us</h2>
          <!-- /wp:heading -->

          <!-- wp:paragraph -->
          <p>Use the form below to get in touch with NeurOx YPAG. Your details will only be used to contact you regarding the message you send.</p>
          <!-- /wp:paragraph -->

          <!-- wp:wpforms/form-selector {"formId":"142","className":"mx-auto"} /--></section>
          <!-- /wp:group -->
          ',
      )
    ); 

  register_block_pattern(
    'blockhaus/latest-blogposts',
    array(
      'title'   => __('Latest blog posts', 'blockhaus'),
      'categories'    => [
        'related-content',
      ],
      'content' => '
      <!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"blockGap":"0px"}},"className":"blockhaus-blog-posts has-accent-background-color has-background slanted z-0 relative overflow-hidden","layout":{"inherit":false}} -->
      <section class="wp-block-group alignfull blockhaus-blog-posts has-accent-background-color has-background slanted z-0 relative overflow-hidden" id="latest-posts"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"grid gap-6 md:w-4/5 md:mx-auto"} -->
      <div class="wp-block-group grid gap-6 md:w-4/5 md:mx-auto"><!-- wp:group {"backgroundColor":"secondary","textColor":"primary","className":"rounded-md col-span-full md:col-span-1 md:col-start-1 p-6 flex flex-col justify-between"} -->
      <div class="wp-block-group rounded-md col-span-full md:col-span-1 md:col-start-1 p-6 flex flex-col justify-between has-primary-color has-secondary-background-color has-text-color has-background"><!-- wp:heading {"textColor":"primary","className":"font-black","fontSize":"gigantic"} -->
      <h2 class="font-black has-primary-color has-text-color has-gigantic-font-size">Blog</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>The latest from the YPAG blog.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-retro"} -->
      <div class="wp-block-button is-style-button-retro"><a class="wp-block-button__link">Visit the blog</a></div>
      <!-- /wp:button --></div>
      <!-- /wp:buttons --></div>
      <!-- /wp:group -->

      <!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"className":"col-span-full md:col-span-3 md:col-start-2","layout":{"inherit":false}} -->
      <div class="wp-block-query col-span-full md:col-span-3 md:col-start-2"><!-- wp:post-template {"className":"grid grid-cols-1 md:grid-cols-3 gap-6 post-template-grid"} -->
      <!-- wp:post-featured-image {"width":"","height":"","sizeSlug":"blog"} /-->

      <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"h-full p-6 flex flex-col","layout":{"type":"default"}} -->
      <div class="wp-block-group h-full p-6 flex flex-col"><!-- wp:post-title {"level":3} /-->

      <!-- wp:post-date {"className":"pb-6","fontSize":"small"} /-->

      <!-- wp:read-more {"content":"View article","className":"bg-yellow-300 border border-current px-2 py-1 shadow-retro mt-auto"} /--></div>
      <!-- /wp:group -->
      <!-- /wp:post-template --></div>
      <!-- /wp:query --></div>
      <!-- /wp:group --></section>
      <!-- /wp:group -->
      ',
    )
    );

  $testing = 'Hey there';

  register_block_pattern(
    'blockhaus/blockhaus-gallery',
    array(
      'title'   => __('Blockhaus Gallery', 'blockhaus'),
      'categories'    => [
        'gallery',
      ],
      'content' => '
      <!-- wp:group {"tagName":"aside","style":{"spacing":{"blockGap":"0px"}},"className":"blockhaus-gallery has-accent-background-color has-background p-6 rounded-md space-y-6"} -->
      <aside id="stories-gallery" class="wp-block-group blockhaus-gallery has-accent-background-color has-background p-6 rounded-md space-y-6"><!-- wp:paragraph -->
      <p>' . $testing . '</p>
      <!-- /wp:paragraph -->

      <!-- wp:gallery {"linkTo":"none"} -->
      <figure class="wp-block-gallery has-nested-images columns-default is-cropped bg-inherit"><!-- wp:image {"id":578,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/surface-ddcLX7Iis44-unsplash-3.jpg" alt="" class="wp-image-578"/></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":486,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/imansyah-muhamad-putera-n4KewLKFOZw-unsplash-1.jpg" alt="" class="wp-image-486"/></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":483,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/disruptivo-DokE5D4GbDk-unsplash-1.jpg" alt="" class="wp-image-483"/></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":437,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/pil.jpg" alt="" class="wp-image-437"/></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":435,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/clark-van-der-beken-xFdrt8YIoJc-unsplash.jpg" alt="" class="wp-image-435"/><figcaption>A final final caption</figcaption></figure>
      <!-- /wp:image --></figure>
      <!-- /wp:gallery --></aside>
      <!-- /wp:group -->
      ',
    )
    );

  register_block_pattern(
    'blockhaus/team-gallery',
    array(
      'title'   => __('Team Gallery', 'blockhaus'),
      'categories'    => [
        'gallery',
      ],
      'content' => '
      <!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"0px"}},"className":"grid grid-cols-3 gap-6 mt-6","layout":{"inherit":true}} -->
      <section class="wp-block-group grid grid-cols-3 gap-6 mt-6"><!-- wp:group {"className":"flex flex-col bg-offset justify-center p-6"} -->
      <div class="wp-block-group flex flex-col bg-offset justify-center p-6"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"extra-large"} -->
      <h2 class="has-extra-large-font-size" style="font-style:normal;font-weight:700">Meet the team</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>Find out about the people who make us work</p>
      <!-- /wp:paragraph --></div>
      <!-- /wp:group -->

      <!-- wp:image {"id":486,"sizeSlug":"profile","linkDestination":"none"} -->
      <figure class="wp-block-image size-profile"><img src="http://pentecost.local/wp-content/uploads/2022/05/imansyah-muhamad-putera-n4KewLKFOZw-unsplash-1-300x300.jpg" alt="" class="wp-image-486"/><figcaption>Jimmy Quinn</figcaption></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":483,"sizeSlug":"profile","linkDestination":"none"} -->
      <figure class="wp-block-image size-profile"><img src="http://pentecost.local/wp-content/uploads/2022/05/disruptivo-DokE5D4GbDk-unsplash-1-300x300.jpg" alt="" class="wp-image-483"/><figcaption>Lana Da Silva</figcaption></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":458,"sizeSlug":"profile","linkDestination":"none"} -->
      <figure class="wp-block-image size-profile"><img src="http://pentecost.local/wp-content/uploads/2022/05/janko-ferlic-1nizzZ-SFw4-unsplash-3-300x300.jpg" alt="" class="wp-image-458"/><figcaption>Jessie Anderson</figcaption></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":578,"sizeSlug":"profile","linkDestination":"none"} -->
      <figure class="wp-block-image size-profile"><img src="http://pentecost.local/wp-content/uploads/2022/05/surface-ddcLX7Iis44-unsplash-3-300x300.jpg" alt="" class="wp-image-578"/><figcaption><a href="http://pentecost.local/about/" data-type="page" data-id="6">Andrea Ireland</a></figcaption></figure>
      <!-- /wp:image --></section>
      <!-- /wp:group -->
      ',
    )
    );

    register_block_pattern(
      'blockhaus/blockhaus-quote',
      array(
        'title'   => __('Blockhaus Quote', 'blockhaus'),
        'categories'    => [
          'callouts-and-quotes',
        ],
        'content' => '
        <!-- wp:quote {"className":"blockhaus-quote relative bg-neutral-light-100 flex flex-col items-center text-center gap-2 px-20 py-16 rounded-md border-l-0 outline-4 outline-double outline-accent outline-offset-4 is-style-default","fontSize":"large"} -->
        <blockquote class="wp-block-quote blockhaus-quote relative bg-neutral-light-100 flex flex-col items-center text-center gap-2 px-20 py-16 rounded-md border-l-0 outline-4 outline-double outline-accent outline-offset-4 is-style-default has-large-font-size"><p>The cure for boredom is curiosity. There is no cure for curiosity.</p><cite>Dorothy Parker</cite></blockquote>
        <!-- /wp:quote -->
        ',
      )
      );

      register_block_pattern(
        'blockhaus/blockhaus-quote-with-image',
        array(
          'title'   => __('Blockhaus Quote with Image', 'blockhaus'),
          'categories'    => [
            'callouts-and-quotes',
          ],
          'content' => '
          <!-- wp:group {"className":"blockhaus-quote-image bg-gray-100 rounded-md flex flex-col items-center p-6 justify-center"} -->
          <div class="wp-block-group blockhaus-quote-image bg-gray-100 rounded-md flex flex-col items-center p-6 justify-center"><!-- wp:image {"id":458,"width":150,"height":150,"sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-default rounded-full aspect-square"} -->
          <figure class="wp-block-image size-thumbnail is-resized is-style-default rounded-full aspect-square"><img src="/wp-content/themes/blockhaus/assets/images/block-patterns/quote-with-image.jpg" alt="Dorothy Parker as a young woman" class="wp-image-458" width="150" height="150"/></figure>
          <!-- /wp:image -->

          <!-- wp:quote {"className":"flex flex-col items-center gap-2 is-style-plain"} -->
          <blockquote class="wp-block-quote flex flex-col items-center gap-2 is-style-plain"><p>The cure for boredom is curiosity. There is no cure for curiosity.</p><cite>Dorothy Parker</cite></blockquote>
          <!-- /wp:quote --></div>
          <!-- /wp:group -->
          ',
        )
        );

    register_block_pattern(
      'blockhaus/instagram',
      array(
        'title'   => __('Instagram', 'blockhaus'),
        'categories'    => [
          'social-media',
        ],
        'content' => '
        <!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"0px"}},"className":"flex gap-8 items-center justify-center p-6 w-fit mx-auto"} -->
        <section class="wp-block-group flex gap-8 items-center justify-center p-6 w-fit mx-auto"><!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center font-bold">Follow us on Instagram</p>
        <!-- /wp:paragraph -->

        <!-- wp:social-links {"size":"has-huge-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} -->
        <ul class="wp-block-social-links aligncenter has-huge-icon-size is-style-logos-only"><!-- wp:social-link {"url":"https://instagram.com/yourusername","service":"instagram","label":"Visit our Instagram"} /--></ul>
        <!-- /wp:social-links --></section>
        <!-- /wp:group -->
        ',
      )
      );

      register_block_pattern(
        'blockhaus/search',
        array(
          'title'   => __('Search', 'blockhaus'),
          'content' => '
          <!-- wp:search {"label":"Search for content","placeholder":"Enter search term ...","width":null,"widthUnit":"px","buttonText":"Submit","backgroundColor":"accent","textColor":"secondary","className":"flex items-center gap-4 mt-2 blockhaus-search"} /-->
          ',
        )
        );

        $facebook = get_field('facebook_url', 'options');

        if($facebook) {
          $facebook_profile = '<!-- wp:social-link {"url":"' . $facebook . '","service":"facebook"} /-->';
        }

        $instagram = get_field('instagram_url', 'options');

        if($instagram) {
          $instagram_profile = '<!-- wp:social-link {"url":"' . $instagram . '","service":"instagram"} /-->';
        }

        $linkedin = get_field('linkedin_url', 'options');

        if($linkedin) {
          $linkedin_profile = '<!-- wp:social-link {"url":"' . $linkedin . '","service":"linkedin"} /-->';
        }


        $tiktok = get_field('tiktok_url', 'options');

        if($tiktok) {
          $tiktok_profile = '<!-- wp:social-link {"url":"' . $tiktok . '","service":"tiktok"} /-->';
        }

        $twitter = get_field('twitter_url', 'options');

        if($twitter) {
          $twitter_profile = '<!-- wp:social-link {"url":"' . $twitter . '","service":"twitter"} /-->';
        }

        $youtube = get_field('youtube_url', 'options');

        if($youtube) {
          $youtube_profile = '<!-- wp:social-link {"url":"' . $youtube . '","service":"youtube"} /-->';
        }

        if($facebook || $instagram || $linkedin || $tiktok || $twitter || $youtube):

          register_block_pattern(
            'blockhaus/social-media-profiles',
            array(
              'title'   => __('Social Media Profiles', 'blockhaus'),
              'categories'    => [
                'social-media',
              ],
              'content' => '
              <!-- wp:social-links {"iconColor":"secondary","iconColorValue":"rgba(50 64 64 / 1)","size":"has-normal-icon-size","className":"is-style-logos-only"} -->
              <ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">' .

              $facebook_profile . $instagram_profile . $linkedin_profile . $tiktok_profile . $twitter_profile . $youtube_profile

              . '</ul>
              <!-- /wp:social-links -->
              ',
            )
            );

        endif;
      
}
add_action( 'init', 'blockhaus_register_patterns' );