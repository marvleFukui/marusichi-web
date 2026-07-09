<?php
/**
 * EVENT 共通サイドバー（CATEGORY = xo_event_cat / ARCHIVES）
 * カテゴリーは作成した xo_event_cat と自動連動。日本語スラッグ対策でクエリ方式リンク。
 */
if (!defined('ABSPATH')) exit;
$ev_archive = get_post_type_archive_link('xo_event');
$cur = isset($_GET['xo_event_cat']) ? sanitize_text_field(wp_unslash($_GET['xo_event_cat'])) : '';
if (is_tax('xo_event_cat')) { $cur = get_queried_object()->slug; }
?>
<aside>
  <div class="side-block filter">
    <h3>CATEGORY</h3>
    <div class="side-links">
      <a href="<?php echo esc_url($ev_archive); ?>"<?php echo $cur === '' ? ' class="is-active"' : ''; ?>>ALL</a>
      <?php foreach (get_terms(['taxonomy' => 'xo_event_cat', 'hide_empty' => false]) as $t) :
          if (is_wp_error($t)) continue; ?>
        <a href="<?php echo esc_url(add_query_arg('xo_event_cat', $t->slug, $ev_archive)); ?>"<?php echo ($cur === $t->slug) ? ' class="is-active"' : ''; ?>><?php echo esc_html($t->name); ?></a>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="side-block archives">
    <h3>ARCHIVES</h3>
    <div class="mo">
      <?php wp_get_archives([
          'type'            => 'monthly',
          'post_type'       => 'xo_event',
          'show_post_count' => true,
          'format'          => 'custom',
          'before'          => '',
          'after'           => '',
      ]); ?>
    </div>
  </div>
</aside>
