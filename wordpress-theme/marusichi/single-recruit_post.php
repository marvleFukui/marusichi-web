<?php
/**
 * 求人情報 詳細（single-recruit_post.php）
 * ACF「求人情報テーブル」（繰り返し：見出し＋本文）を仕様表として表示。
 */
if (!defined('ABSPATH')) exit;
get_header();

while (have_posts()) : the_post();
    $pid   = get_the_ID();
    $rows  = function_exists('get_field') ? (get_field('求人情報テーブル', $pid) ?: []) : [];
    $terms = get_the_terms($pid, 'recruit_cat');
    $cat   = (!is_wp_error($terms) && $terms) ? $terms[0]->name : '';
?>

<!-- ページタイトル -->
<section class="page-title">
  <p class="en">RECRUIT INFO</p>
  <span class="jp">求人情報</span>
</section>

<section class="section" style="padding-top:32px;">
  <div class="w900">

    <!-- 見出し -->
    <div class="rec-detail-head">
      <div class="meta">
        <?php if ($cat) : ?><span class="news-cat"><?php echo esc_html($cat); ?></span><?php endif; ?>
        <span class="date"><?php echo esc_html(get_the_date('Y.m.d')); ?></span>
      </div>
      <h1><?php the_title(); ?></h1>
    </div>

    <!-- 本文（任意） -->
    <?php if (trim(get_the_content()) !== '') : ?>
    <div class="detail-body"><?php the_content(); ?></div>
    <?php endif; ?>

    <!-- 求人情報テーブル -->
    <?php if ($rows) : ?>
    <table class="spec-table top-line rec-detail-table">
      <?php foreach ($rows as $r) :
          $th = $r['求人情報テーブル（見出し）'] ?? '';
          $td = $r['求人情報テーブル（本文）'] ?? '';
          if ($th === '' && $td === '') continue; ?>
      <tr>
        <th><?php echo esc_html($th); ?></th>
        <td><?php echo wp_kses_post($td); ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
    <?php endif; ?>

    <!-- 戻る -->
    <div class="post-nav">
      <?php $prev = get_previous_post(); $next = get_next_post(); ?>
      <span><?php if ($prev) : ?><a href="<?php echo esc_url(get_permalink($prev)); ?>">&larr;&nbsp;前の求人</a><?php endif; ?></span>
      <a href="<?php echo esc_url(get_post_type_archive_link('recruit_post')); ?>">求人情報一覧へ</a>
      <span><?php if ($next) : ?><a href="<?php echo esc_url(get_permalink($next)); ?>">次の求人&nbsp;&rarr;</a><?php endif; ?></span>
    </div>

  </div>
</section>

<?php
endwhile;
get_footer();
