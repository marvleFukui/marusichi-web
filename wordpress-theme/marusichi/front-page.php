<?php
/**
 * フロントページ（TOP）
 * ・新着NEWSは投稿から動的取得
 * ・Instagramは Smash Balloon のショートコード [instagram-feed]
 */
if (!defined('ABSPATH')) exit;
get_header();
$img = get_template_directory_uri() . '/images';
?>

<!-- ========== ヒーロー ========== -->
<section class="hero">
  <div class="hero-slides">
    <div class="hero-slide is-active" style="background-image:url('<?php echo esc_url($img); ?>/top/top-slide01.jpg')"></div>
    <div class="hero-slide" style="background-image:url('<?php echo esc_url($img); ?>/top/top-slide02.jpg')"></div>
    <div class="hero-slide" style="background-image:url('<?php echo esc_url($img); ?>/top/top-slide03.jpg')"></div>
    <div class="hero-slide" style="background-image:url('<?php echo esc_url($img); ?>/top/top-slide04.jpg')"></div>
    <div class="hero-slide" style="background-image:url('<?php echo esc_url($img); ?>/top/top-slide05.jpg')"></div>
  </div>
  <div class="hero-copy"><h1>世界自然遺産・知床の<br>ゼネラルコントラクター</h1></div>
  <div class="hero-dots">
    <button class="is-active" aria-label="1"></button><button aria-label="2"></button><button aria-label="3"></button><button aria-label="4"></button><button aria-label="5"></button>
  </div>
  <a href="#" class="hero-movie" data-movie="LJQOzrtByCI" aria-label="RECRUIT MOVIE">
    <img src="<?php echo esc_url($img); ?>/common/recruit_movie_btn.svg" alt="RECRUIT MOVIE">
  </a>
</section>

<!-- ========== Recruit ブロック ========== -->
<section class="split band-wrap">
  <div class="split-img" style="background-image:url('<?php echo esc_url($img); ?>/top/top-recruit.jpg')"></div>
  <div class="split-body">
    <p class="en-title">Recruit</p>
    <p class="jp-sub">採用情報</p>
    <p class="lead">大自然の中で<br>可能性が広がる</p>
    <p class="desc">経験・未経験を問わず、<br class="br-pc">斜里町の安心と安全・暮らしを支える仲間を<br class="br-pc">広く募集しています。</p>
    <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="more">MORE <span class="arrow">&gt;</span></a>
  </div>
</section>

<!-- ========== 新卒 / 中途 2ボタン ========== -->
<section class="section">
  <div class="w900">
    <div class="recruit-cta">
      <a href="#" data-link="recruit-site">新卒採用はこちら<span class="chev">&gt;</span></a>
      <a href="#" data-link="recruit-site">中途採用はこちら<span class="chev">&gt;</span></a>
    </div>
  </div>
</section>

<!-- ========== RECRUIT INFO（新着NEWS 動的） ========== -->
<section class="section" style="padding-top:0;">
  <div class="w900">
    <div class="info-head">
      <div>
        <p class="en-title">RECRUIT INFO</p>
        <p class="jp-sub">インターンシップ・説明会情報</p>
      </div>
      <a href="<?php echo esc_url(home_url('/news/')); ?>" class="more">MORE <span class="arrow">&gt;</span></a>
    </div>
    <ul class="news-list">
      <?php
      $q = marusichi_news_query(3);
      if ($q->have_posts()) :
          while ($q->have_posts()) : $q->the_post();
              $cats = get_the_category();
              $cat  = $cats ? $cats[0]->name : 'NEWS';
      ?>
      <li class="news-row">
        <span class="news-cat"><?php echo esc_html($cat); ?></span>
        <span class="news-date"><?php echo esc_html(get_the_date('Y.m.d')); ?></span>
        <a href="<?php the_permalink(); ?>" class="news-ttl"><?php the_title(); ?></a>
      </li>
      <?php endwhile; wp_reset_postdata(); else : ?>
      <li class="news-row"><span class="news-cat">NEWS</span><span class="news-date">-</span><span class="news-ttl">お知らせは準備中です。</span></li>
      <?php endif; ?>
    </ul>
  </div>
</section>

<!-- ========== Instagram（Smash Balloon） ========== -->
<section class="section" style="padding-top:0;">
  <div class="wrap">
    <div class="insta-head">
      <a href="#" class="ig" data-link="instagram">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2b2b2b" stroke-width="1.6"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="#2b2b2b" stroke="none"/></svg>
        Instagram
      </a>
      <a href="#" class="more" data-link="instagram">more <span class="arrow">&gt;</span></a>
    </div>
    <div class="insta-embed">
      <?php echo do_shortcode('[instagram-feed]'); ?>
    </div>
  </div>
</section>

<!-- ========== COMPANY ブロック ========== -->
<section class="split band-wrap">
  <div class="split-img" style="background-image:url('<?php echo esc_url($img); ?>/top/top-company.jpg')"></div>
  <div class="split-body">
    <p class="en-title">COMPANY</p>
    <p class="jp-sub">丸七高橋組について</p>
    <p class="lead">北海道に<br>根ざして70年</p>
    <p class="desc">丸七高橋組は創業以来、斜里町の総合建設として<br class="br-pc">建築・土木工事で地域社会に貢献してきました。<br class="br-pc">創業者・高橋七郎の<br class="br-pc">「誠実な仕事をし、造ったものには責任を持つ」という<br class="br-pc">職人気質は、今なお全ての事業に受け継がれています。</p>
    <a href="<?php echo esc_url(home_url('/company/')); ?>" class="more">MORE <span class="arrow">&gt;</span></a>
  </div>
</section>

<!-- ========== GENERAL CONTRACTOR ========== -->
<section class="section">
  <div class="wrap">
    <div class="sec-head">
      <p class="en-title">GENERAL CONTRACTOR</p>
      <span class="jp-sub">建築・土木事業</span>
    </div>
    <div class="service-cards full">
      <div class="service-card">
        <img src="<?php echo esc_url($img); ?>/top/top-service-brn01.jpg" alt="建築事業">
        <div class="cap">
          <h3>建築事業</h3>
          <p class="tags">公共施設 商業施設 集合住宅 一戸建住宅</p>
          <span class="more">MORE <span class="arrow">&gt;</span></span>
        </div>
        <a href="<?php echo esc_url(home_url('/construction/')); ?>" class="stretch" aria-label="建築事業"></a>
      </div>
      <div class="service-card">
        <img src="<?php echo esc_url($img); ?>/top/top-service-brn02.jpg" alt="土木事業">
        <div class="cap">
          <h3>土木事業</h3>
          <p class="tags">道路 橋梁 河川 公園</p>
          <span class="more">MORE <span class="arrow">&gt;</span></span>
        </div>
        <a href="<?php echo esc_url(home_url('/construction/')); ?>#civil" class="stretch" aria-label="土木事業"></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
