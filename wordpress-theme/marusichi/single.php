<?php
/**
 * NEWS 詳細（single.php）
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<div class="page-title">
  <p class="en">NEWS</p>
  <span class="jp">お知らせ</span>
</div>

<section class="section" style="padding-top:40px;">
  <div class="wrap">
    <div class="layout-side">
      <?php get_template_part('template-parts/news-sidebar'); ?>

      <div>
        <?php while (have_posts()) : the_post();
            $cats = get_the_category();
            $cat  = $cats ? $cats[0]->name : 'NEWS'; ?>
        <div class="head" style="display:flex;align-items:center;gap:18px;margin-bottom:12px;">
          <span class="badge"><?php echo esc_html($cat); ?></span>
          <span class="date" style="font-family:var(--en);font-weight:700;font-size:13px;color:#555;"><?php echo esc_html(get_the_date('Y.m.d')); ?></span>
        </div>
        <div class="detail-head"><h1><?php the_title(); ?></h1></div>
        <div class="detail-body" style="margin-top:24px;">
          <?php the_content(); ?>
        </div>

        <div class="post-nav" style="margin-top:56px;">
          <?php $news_url = get_option('page_for_posts') ? get_permalink(get_option('page_for_posts')) : home_url('/news/'); ?>
          <span><?php previous_post_link('%link', '&lsaquo;&nbsp;前の記事'); ?></span>
          <a href="<?php echo esc_url($news_url); ?>">リストに戻る</a>
          <span><?php next_post_link('%link', '次の記事&nbsp;&rsaquo;'); ?></span>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
