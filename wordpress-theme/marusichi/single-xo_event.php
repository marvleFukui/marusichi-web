<?php
/**
 * イベント 詳細（single-xo_event.php）— NEWS詳細と同じデザイン＋イベント用サイドバー
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<div class="page-title">
  <p class="en">EVENT</p>
  <span class="jp">イベント</span>
</div>

<section class="section" style="padding-top:40px;">
  <div class="wrap">
    <div class="layout-side">
      <?php get_template_part('template-parts/event-sidebar'); ?>

      <div>
        <?php while (have_posts()) : the_post();
            $terms = get_the_terms(get_the_ID(), 'xo_event_cat');
            $cat   = (!is_wp_error($terms) && $terms) ? $terms[0]->name : 'EVENT'; ?>
        <div class="head" style="display:flex;align-items:center;gap:18px;margin-bottom:12px;">
          <span class="badge"><?php echo esc_html($cat); ?></span>
          <span class="date" style="font-family:var(--en);font-weight:700;font-size:13px;color:#555;"><?php echo esc_html(get_the_date('Y.m.d')); ?></span>
        </div>
        <div class="detail-head"><h1><?php the_title(); ?></h1></div>
        <div class="detail-body" style="margin-top:24px;">
          <?php the_content(); ?>
        </div>

        <div class="post-nav" style="margin-top:56px;">
          <span><?php previous_post_link('%link', '&lsaquo;&nbsp;前のイベント'); ?></span>
          <a href="<?php echo esc_url(get_post_type_archive_link('xo_event')); ?>">リストに戻る</a>
          <span><?php next_post_link('%link', '次のイベント&nbsp;&rsaquo;'); ?></span>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
