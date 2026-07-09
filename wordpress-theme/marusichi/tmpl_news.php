<?php
/**
 * Template Name: NEWS一覧（tmpl_news）
 * 参考(niveau)から移行した「お知らせ」固定ページが _wp_page_template=tmpl_news.php を
 * 参照しているため、当テーマにも同名テンプレを用意。NEWS(投稿)一覧をデザイン表示する。
 * ※「設定→表示設定→投稿ページ＝お知らせ」にすると home.php でも同じ表示になります。
 */
if (!defined('ABSPATH')) exit;
get_header();
$img   = get_template_directory_uri() . '/images';
$paged = max(1, (int) get_query_var('paged'), (int) get_query_var('page'));
$q = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 10,
    'paged'          => $paged,
    'ignore_sticky_posts' => true,
]);
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
        <?php if ($q->have_posts()) : ?>
        <div class="news-media">
          <?php while ($q->have_posts()) : $q->the_post();
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
          <?php echo paginate_links([
              'total'     => $q->max_num_pages,
              'current'   => $paged,
              'prev_text' => '‹',
              'next_text' => '›',
              'mid_size'  => 2,
          ]); ?>
        </div>
        <?php wp_reset_postdata(); else : ?>
        <p style="padding:20px 0;color:#666;">お知らせはまだありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
