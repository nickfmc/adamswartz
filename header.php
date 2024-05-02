<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  
  <?php // Are you using REAL FAVICON GENERATOR!? You should. If so...  ?>
  <?php // Put generated code in favicon-head.php file; then uncomment line below ?>
  <?php // get_template_part( 'template-part/favicon-head' ); ?>

  <?php // other html head stuff (before WP/theme scripts are loaded) ------- ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet">

  <?php wp_head(); // wordpress head functions -- DONOTREMOVE ?>

  <?php // START Google Analytics here ?>

  <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16531029453"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-16531029453'); </script>


  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W7L7QFT8X5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-W7L7QFT8X5');
</script>
  <?php // END Analytics ?>


  <?php
  if (is_page(296)) {
  ?>
    <!-- Event snippet for Checkout conversion page -->
    <script> gtag('event', 'conversion', { 'send_to': 'AW-16531029453/yh_8CPKQ66kZEM37zco9', 'value': 36.0, 'currency': 'USD' }); </script>
  <?php
  }
  ?> 


  <?php
  if (is_page(292)) {
    // <!-- Event snippet for Cart conversion page -->
    ?>
   <script> gtag('event', 'conversion', { 'send_to': 'AW-16531029453/Ex8_CPWj5KkZEM37zco9', 'value': 36.0, 'currency': 'USD' }); </script>
  <?php }
  ?>


<?php
if (is_wc_endpoint_url('order-received')) {
?>
    <!-- thank-you endpoint -->
       <script> gtag('event', 'conversion', { 'send_to': 'AW-16531029453/6S4gCM36j6kZEM37zco9', 'value': 50.0, 'currency': 'USD', 'transaction_id': '' }); </script>
<?php
}
?>


  </head>

<body <?php body_class(pretty_body_class()); ?> itemscope itemtype="https://schema.org/WebPage">




  <header id="c-page-header" class="o-section c-page-header" role="banner" itemscope itemtype="https://schema.org/WPHeader">
    <div class="o-wrapper-wide  u-relative">
      <?php get_template_part( 'template-part/header/logo' ); ?>
      <?php get_template_part( 'template-part/navigation/nav-main' ); ?>
      <?php get_template_part( 'template-part/navigation/nav-tertiary' ); ?>
      <div class="c-modal-nav-button-wrap">
        <a class="toggle hc-nav-trigger mobile-nav" href="#" role="button" aria-label="Open Menu" aria-controls="hc-nav-1" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><rect width="18" height="1.5" x="3" y="7.001" fill="currentColor" rx=".75"/><rect width="15" height="1.5" x="3" y="11.251" fill="currentColor" rx=".75"/><rect width="18" height="1.5" x="3" y="15.499" fill="currentColor" rx=".75"/></svg>
        </a>
      </div>
    </div>
    <!-- /o-wrapper-wide-->
  </header> 
  <!-- /c-page-header -->
