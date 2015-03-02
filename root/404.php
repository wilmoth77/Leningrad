<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package {%= title %}
 */

get_template_part('templates/page', 'header'); ?>

<div class="alert alert-warning">
  <?php _e('Sorry, but the page you were trying to view does not exist.', '{%= prefix %}'); ?>
</div>

<p><?php _e('It looks like this was the result of either:', '{%= prefix %}'); ?></p>
<ul>
  <li><?php _e('a mistyped address', '{%= prefix %}'); ?></li>
  <li><?php _e('an out-of-date link', '{%= prefix %}'); ?></li>
</ul>

<?php get_search_form(); ?>