<?php
/**
 * 汎用アーカイブ（日付/月別・タグ・作成者 等）— NEWSと同じデザイン＋サイドバー
 * ※ works_post/recruit_post/category は専用テンプレが優先
 */
if (!defined('ABSPATH')) exit;
get_header();
$img = get_template_directory_uri() . '/images';
$sub = wp_strip_all_tags(get_the_archive_title());
if ($sub === '') $sub = 'お知らせ';
?>

<div class="page-title">
  <p class="en">NEWS</p>
  <span class="jp"><?php echo esc_html($sub); ?></span>
</div>

<section class="section" style="padding-top:40px;">
  <div class="wrap">
    <div class="layout-side">
      <?php get_template_part('template-parts/news-sidebar'); ?>

      <div>
        <?php if (have_posts()) : ?>
        <div class="news-media">
          <?php while (have_posts()) : the_post();
              $cats  = get_the_category();
              $cat   = $cats ? $cats[0]->name : 'NEWS';
              $thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>
          <article class="item">
            <div class="thumb">
              <?php if ($thumb) : ?>
                <img src="<?php echo esc_url($thumb); ?>" alt="">
              <?php else : ?>
                <img src="<?php echo esc_url($img); ?>/news/news-list-dummy1.jpg" alt="丸七高橋組">
              <?php endif; ?>
            </div>
            <div>
              <div class="head">
                <span class="badge"><?php echo esc_html($cat); ?></span>
                <span class="date"><?php echo esc_html(get_the_date('Y.m.d')); ?></span>
              </div>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 70, '…')); ?></p>
              <a href="<?php the_permalink(); ?>" class="more">MORE <span class="arrow">&gt;</span></a>
            </div>
          </article>
          <?php endwhile; ?>
        </div>
        <div class="pager">
          <?php echo paginate_links(['prev_text' => '‹', 'next_text' => '›', 'mid_size' => 2]); ?>
        </div>
        <?php else : ?>
        <p style="padding:20px 0;color:#666;">この期間のお知らせはまだありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
