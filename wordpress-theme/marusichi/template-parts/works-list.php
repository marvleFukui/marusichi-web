<?php
/**
 * 施工実績 一覧の共通パーツ（archive-works_post.php / taxonomy.php で使用）
 * メインループ（$wp_query）をそのまま利用（一覧・分類アーカイブ両対応）
 */
if (!defined('ABSPATH')) exit;

$termA = get_terms(['taxonomy' => 'jisseki_cat_a', 'hide_empty' => false]);
$termB = get_terms(['taxonomy' => 'jisseki_cat_b', 'hide_empty' => false]);
$cur   = is_tax() ? get_queried_object() : null;
$cur_id = $cur ? (int) $cur->term_id : 0;
$all   = get_post_type_archive_link('works_post');
?>

<div class="page-title">
  <p class="en">WORKS</p>
  <span class="jp">施工実績</span>
</div>

<section class="section" style="padding-top:40px;">
  <div class="wrap">
    <div class="layout-side">

      <!-- 絞り込み -->
      <aside>
        <div class="side-block filter">
          <h3>業態</h3>
          <div class="side-links">
            <a href="<?php echo esc_url($all); ?>"<?php echo !$cur ? ' class="is-active"' : ''; ?>>ALL</a>
            <?php foreach ($termA as $t) : ?>
              <a href="<?php echo esc_url(get_term_link($t)); ?>"<?php echo ($cur_id === (int)$t->term_id) ? ' class="is-active"' : ''; ?>><?php echo esc_html($t->name); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="side-block filter">
          <h3>実行内容</h3>
          <div class="side-links">
            <a href="<?php echo esc_url($all); ?>"<?php echo !$cur ? ' class="is-active"' : ''; ?>>ALL</a>
            <?php foreach ($termB as $t) : ?>
              <a href="<?php echo esc_url(get_term_link($t)); ?>"<?php echo ($cur_id === (int)$t->term_id) ? ' class="is-active"' : ''; ?>><?php echo esc_html($t->name); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      </aside>

      <!-- 一覧 -->
      <div>
        <?php if (have_posts()) : ?>
        <div class="works-grid">
          <?php while (have_posts()) : the_post();
              $thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
              if (!$thumb && function_exists('marusichi_work_images')) {
                  $gi = marusichi_work_images(get_the_ID());
                  if ($gi) $thumb = wp_get_attachment_image_url($gi[0], 'medium');
              } ?>
          <a href="<?php the_permalink(); ?>" class="work-card">
            <div class="thumb"><?php if ($thumb) : ?><img src="<?php echo esc_url($thumb); ?>" alt=""><?php endif; ?></div>
            <div class="meta">
              <span class="ttl"><?php the_title(); ?></span>
              <span class="read">READ MORE&nbsp;&gt;</span>
            </div>
          </a>
          <?php endwhile; ?>
        </div>
        <div class="pager">
          <?php echo paginate_links(['prev_text' => '‹', 'next_text' => '›', 'mid_size' => 2]); ?>
        </div>
        <?php else : ?>
        <p style="padding:20px 0;color:#666;">該当する施工実績はまだありません。</p>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>
