  <footer class="o-section c-page-footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">
    <div class="o-wrapper-wide c-page-footer-top">
      <div class="c-footer-logo">
        <a href="/" rel="nofollow"> 
          umbrla supply
          <span>by Adam Swartz </span>
        </a>
      </div>
      <div class="c-footer-socials">
        <a target="_blank" rel="noopener" aria-label="LinkedIn" href="https://www.linkedin.com/in/adamswartz18/">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" focusable="false"><path fill="currentColor" d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002M7 8.48H3V21h4zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91z"/></svg>
        </a>
        <a target="_blank" rel="noopener" aria-label="Instagram" href="https://www.instagram.com/umbrlachuck/">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" focusable="false"><g fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 16a4 4 0 1 0 0-8a4 4 0 0 0 0 8"/><path d="M3 16V8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5Z"/><path stroke-linecap="round" stroke-linejoin="round" d="m17.5 6.51l.01-.011"/></g></svg>
        </a>
        <a target="_blank" rel="noopener" aria-label="Pintrest" href="https://www.pinterest.com/umbrlaclothier/">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20"><path fill="currentColor" d="M10.2 2C5.8 2 3.5 4.8 3.5 7.9c0 1.5.8 3 2.1 3.8c.4.2.3 0 .6-1.2c0-.1 0-.2-.1-.3C4.3 8 5.8 3.7 10 3.7c6.1 0 4.9 8.4 1.1 8.4c-.8.1-1.5-.5-1.5-1.3v-.4c.4-1.1.7-2.1.8-3.2c0-2.1-3.1-1.8-3.1 1c0 .5.1 1 .3 1.4c0 0-1 4.1-1.2 4.8c-.2 1.2-.1 2.4.1 3.5c-.1.1 0 .1 0 .1h.1c.7-1 1.3-2 1.7-3.1c.1-.5.6-2.3.6-2.3c.5.7 1.4 1.1 2.3 1.1c3.1 0 5.3-2.7 5.3-6S13.7 2 10.2 2"/></svg>
        </a>
      </div>
      <div class="c-footer-contact"> 
      <a href="tel:3034378692">303.437.8692</a>
<a href="mailto:adam@umbrlasupply.com">adam@umbrlasupply.com</a>
      </div>
          <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <?php dynamic_sidebar( 'footer-1' ); ?>
          <?php endif; ?>
        

    </div>
    <div class="o-wrapper-wide c-page-footer-lower">
         <p> &copy; <?php echo date('Y'); ?> all rights reserved.</p>
        </div>
    <!-- /.o-wrapper-wide -->
  </footer>
  <!-- /.c-page-footer -->

  <?php get_template_part( 'template-part/navigation/nav-modal' ); ?>

  <!-- all js scripts are loaded in lib/gdt-enqueues.php -->
  <?php wp_footer(); ?>

</body>
</html>
