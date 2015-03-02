<?php
/**
 * The template for displaying the footer.
 * *
 * @package {%= title %}
 */
?>
      <footer>
      	<a href="<?php echo esc_url( __( 'http://wordpress.org/', '{%= prefix %}' ) ); ?>"><?php printf( __( 'Proudly powered by %s', '{%= prefix %}' ), 'WordPress' ); ?></a>
      	<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> </p>
      </footer>

<?php wp_footer(); ?>

</body>
</html>

