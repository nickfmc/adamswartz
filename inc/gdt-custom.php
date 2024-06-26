<?php
/**
 * Custom functions for this project? If yes, drop them here!
 */

  // If using acf icon picker - https://github.com/houke/acf-icon-picker -  modify the path to the icons directory
//   add_filter( 'acf_icon_path_suffix', 'acf_icon_path_suffix' );

//   function acf_icon_path_suffix( $path_suffix ) {
//       return 'img/icons/';
//   }
  
//used for Stackable blocks support - match to wrapper width 
global $content_width;
$content_width = 920;

function custom_woocommerce_gallery_thumbnail_size($size) {
  return 'thumbnail'; // Change this to your desired size
}
add_filter('woocommerce_gallery_thumbnail_size', 'custom_woocommerce_gallery_thumbnail_size');
?>
