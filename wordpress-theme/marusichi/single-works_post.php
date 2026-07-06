<?php
/**
 * 施工実績 詳細（single-works_post.php）
 * ACF「施工実績詳細」を使用（商品コピー・施工実績登録[繰り返し]・ギャラリー/画像）
 */
if (!defined('ABSPATH')) exit;
get_header();

while (have_posts()) : the_post();
    $pid    = get_the_ID();
    $sub    = function_exists('get_field') ? get_field('商品コピートップ', $pid) : '';
    $copyb  = function_exists('get_field') ? get_field('商品コピーボトム', $pid) : '';
    $rows   = function_exists('get_field') ? (get_field('施工実績登録', $pid) ?: []) : [];
    $img_ids = function_exists('marusichi_work_images') ? marusichi_work_images($pid) : [];
    // フォールバック（画像未登録時はアイキャッチ）
    if (!$img_ids && has_post_thumbnail()) $img_ids = [get_post_thumbnail_id()];
?>

<section class="section">
  <div class="wk-detail">

    <!-- ギャラリー -->
    <?php if ($img_ids) :
        $main = wp_get_attachment_image_url($img_ids[0], 'large'); ?>
    <div class="detail-gallery">
      <div class="wk-gallery-wrap">
        <?php if (count($img_ids) > 1) : ?><span class="wk-gallery-nav prev">&lsaquo;</span><?php endif; ?>
        <img class="main-img" src="<?php echo esc_url($main); ?>" alt="<?php the_title_attribute(); ?>">
        <?php if (count($img_ids) > 1) : ?><span class="wk-gallery-nav next">&rsaquo;</span><?php endif; ?>
      </div>
      <?php if (count($img_ids) > 1) : ?>
      <div class="wk-thumbs-row">
        <span class="arw">&lsaquo;</span>
        <div class="thumbs">
          <?php foreach ($img_ids as $id) :
              $t = wp_get_attachment_image_url($id, 'medium');
              $f = wp_get_attachment_image_url($id, 'large'); ?>
            <img src="<?php echo esc_url($t); ?>" data-full="<?php echo esc_url($f); ?>" alt="">
          <?php endforeach; ?>
        </div>
        <span class="arw">&rsaquo;</span>
      </div>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <!-- 見出し -->
    <div class="detail-head">
      <h1><?php the_title(); ?></h1>
      <?php if ($sub) : ?><p class="sub"><?php echo esc_html($sub); ?></p><?php endif; ?>
    </div>

    <!-- 本文 -->
    <?php if (get_the_content() || $copyb) : ?>
    <div class="detail-body">
      <?php the_content(); ?>
      <?php if ($copyb) : ?><p><?php echo nl2br(esc_html($copyb)); ?></p><?php endif; ?>
    </div>
    <?php endif; ?>

    <!-- 概要テーブル（施工実績登録 繰り返し） -->
    <?php if ($rows) : ?>
    <table class="spec-table top-line">
      <?php foreach ($rows as $r) :
          $it = $r['項目タイトル'] ?? '';
          $ib = $r['項目本文'] ?? '';
          if ($it === '' && $ib === '') continue; ?>
      <tr>
        <th><?php echo esc_html($it); ?></th>
        <td><?php echo nl2br(esc_html($ib)); ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
    <?php endif; ?>

    <!-- 投稿ナビ -->
    <div class="post-nav">
      <?php
      $prev = get_previous_post();
      $next = get_next_post();
      ?>
      <span><?php if ($prev) : ?><a href="<?php echo esc_url(get_permalink($prev)); ?>">&larr;&nbsp;前の物件</a><?php endif; ?></span>
      <a href="<?php echo esc_url(home_url('/works/')); ?>">リストに戻る</a>
      <span><?php if ($next) : ?><a href="<?php echo esc_url(get_permalink($next)); ?>">次の物件&nbsp;&rarr;</a><?php endif; ?></span>
    </div>

  </div>
</section>

<?php
endwhile;
get_footer();
