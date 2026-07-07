<?php
/**
 * 求人情報 一覧（archive-recruit_post.php）
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- ページタイトル -->
<section class="page-title">
  <p class="en">RECRUIT INFO</p>
  <span class="jp">求人情報</span>
</section>

<section class="section" style="padding-top:32px;">
  <div class="w900">
    <ul class="news-list rec-info-list">
      <?php if (have_posts()) : while (have_posts()) : the_post();
          $terms = get_the_terms(get_the_ID(), 'recruit_cat');
          $cat   = (!is_wp_error($terms) && $terms) ? $terms[0]->name : 'RECRUIT';
      ?>
      <li class="news-row">
        <span class="news-cat"><?php echo esc_html($cat); ?></span>
        <span class="news-date"><?php echo esc_html(get_the_date('Y.m.d')); ?></span>
        <a href="<?php the_permalink(); ?>" class="news-ttl"><?php the_title(); ?></a>
      </li>
      <?php endwhile; else : ?>
      <li class="news-row"><span class="news-cat">RECRUIT</span><span class="news-date">-</span><span class="news-ttl">求人情報は準備中です。</span></li>
      <?php endif; ?>
    </ul>
    <?php if (function_exists('the_posts_pagination')) the_posts_pagination(['prev_text' => '‹', 'next_text' => '›']); ?>
  </div>
</section>

<?php get_footer();
