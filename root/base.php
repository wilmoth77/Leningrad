<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
      
      <!-- Base.php -->
    <?php if({%= prefix %}_display_sidebar()) : ?>
      <main class="wrap container" role="main">
          <div class="content row">
              <div class="main">
                  <?php include {%= prefix %}_template_path(); ?>
              </div><!-- /.main -->
              <aside class="sidebar" role="complementary">
                  <?php include {%= prefix %}_sidebar_path(); ?>
              </aside><!-- /.sidebar -->              
          </div>
      </main><!-- /.wrap -->
          <?php else: ?>
      <main class="wrap" role="main">
          <div class="main">
              <?php include {%= prefix %}_template_path(); ?>
          </div><!-- /.main -->
      </main><!-- /.wrap -->
      <?php endif; ?>
      <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>