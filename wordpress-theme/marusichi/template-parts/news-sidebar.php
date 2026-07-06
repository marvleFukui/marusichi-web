<?php
/**
 * NEWS 共通サイドバー（CATEGORY / ARCHIVES）
 */
if (!defined('ABSPATH')) exit;
?>
<aside>
  <div class="side-block">
    <h3>CATEGORY</h3>
    <div class="side-links">
      <?php
      foreach (get_categories(['hide_empty' => false]) as $c) {
          printf('<a href="%s">%s</a>', esc_url(get_category_link($c)), esc_html($c->name));
      }
      ?>
    </div>
  </div>
  <div class="side-block archives">
    <h3>ARCHIVES</h3>
    <div class="mo">
      <?php wp_get_archives([
          'type'            => 'monthly',
          'show_post_count' => true,
          'format'          => 'custom',
          'before'          => '',
          'after'           => '',
      ]); ?>
    </div>
  </div>
</aside>
