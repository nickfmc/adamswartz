<?php get_header(); ?>

<div class="o-layout-row">
  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/WebPageElement">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <!-- <header class="c-article-header">
      </header> -->
      <!-- /article-header -->
      <article <?php post_class('clearfix'); ?> role="article">
        <?php the_content(); ?>

        <footer class="c-article-footer">
         <!-- back to products -->
          <a href="/umbrlasupply/" class="c-button c-button--primary"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20"><path fill="currentColor" d="M19 7v6c0 1.103-.896 2-2 2H3v-3h13V8H5v2L1 6.5L5 3v2h12a2 2 0 0 1 2 2"/></svg> View All Products</a>
        </footer>
      </article>
    <?php endwhile; ?>
      <?php get_template_part( 'template-part/post/post-nav' ); ?>
    <?php else : ?>
      <?php get_template_part( 'template-part/post/not-found' ); ?>
    <?php endif; ?>
    
  </main>
</div>
<!-- /layout-row-->

<?php get_footer(); ?>
