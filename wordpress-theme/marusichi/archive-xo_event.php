<?php
/**
 * イベント一覧（archive-xo_event.php）= /xo_event/
 * NEWSと同じデザイン＋イベント用サイドバー（xo_event_cat 連動）
 */
if (!defined('ABSPATH')) exit;
get_header();
$img = get_template_directory_uri() . '/images';
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
        <?php if (have_posts()) : ?>
        <div class="news-media">
          <?php while (have_posts()) : the_post();
              $terms = get_the_terms(get_the_ID(), 'xo_event_cat');
              $cat   = (!is_wp_error($terms) && $terms) ? $terms[0]->name : 'EVENT';
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
        <p style="padding:20px 0;color:#666;">イベントはまだありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
