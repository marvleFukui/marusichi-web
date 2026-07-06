<?php
/**
 * フォールバック（index.php）※通常は front-page.php / home.php / 各テンプレートが使われる
 */
if (!defined('ABSPATH')) exit;
get_header();
?>
<section class="section">
  <div class="wrap">
    <?php if (have_posts()) : ?>
      <div class="news-media">
      <?php while (have_posts()) : the_post(); ?>
        <article class="item">
          <div class="thumb"><?php if (has_post_thumbnail()) the_post_thumbnail('medium'); ?></div>
          <div>
            <div class="head"><span class="date"><?php echo esc_html(get_the_date('Y.m.d')); ?></span></div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </div>
        </article>
      <?php endwhile; ?>
      </div>
      <div class="pager"><?php echo paginate_links(['prev_text' => '‹', 'next_text' => '›']); ?></div>
    <?php else : ?>
      <p style="padding:40px 0;">コンテンツがありません。</p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer();
