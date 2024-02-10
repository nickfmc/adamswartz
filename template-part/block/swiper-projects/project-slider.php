<?php

/**
 * blockname Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'c-project-swiper-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'c-project-swiper';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( $is_preview ) {
    $className .= ' is-admin';
}


?>

 
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> ">





<div class="swiper">
      <div class="swiper-wrapper">
       

        <?php if( have_rows('slides') ): ?>
         <?php while( have_rows('slides') ): the_row(); ?>
         <div class="swiper-slide swiper-slide-3112">
            <?php
            $image = get_sub_field('slider_image');
            $size = 'full';
            if($image){
                echo wp_get_attachment_image($image, $size, false, array('class' => 'swiper-slide-bg-image swiper-slide-bg-image-c61b', 'loading' => 'lazy'));
            }?>
            <div class="swiper-lazy-preloader"></div>
            <div class="swiper-slide-content swiper-slide-content-c568">
            <div class="swiper-slide-block swiper-slide-block-5d53">
              <div class="swiper-slide-text swiper-slide-text-8edf">
                    <?php echo get_sub_field('title'); ?>
              </div>
              <div class="swiper-slide-text swiper-slide-text-f7f1">
              <?php echo get_sub_field('content'); ?>
              </div>
            </div>
          </div>
        
        
        </div>
        <?php endwhile; ?>
        <?php endif; ?>





      </div>

      <div class="swiper-pagination"></div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>




    


</div>


  

