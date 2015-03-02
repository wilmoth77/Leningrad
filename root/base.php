<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
      
      <!-- Base.php -->

    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main" role="main">
          <?php include {%= prefix %}_template_path(); ?>
        </main><!-- /.main -->
        <?php if ({%= prefix %}_display_sidebar()) : ?>
          <aside class="sidebar" role="complementary">
            <?php include {%= prefix %}_sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
