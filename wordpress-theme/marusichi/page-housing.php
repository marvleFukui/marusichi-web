<?php
/* Template Name: 住宅事業 */
if (!defined('ABSPATH')) exit;
get_header();
$img = get_template_directory_uri() . '/images';
?>

<!-- ========== ページヒーロー ========== -->
<section class="page-hero" style="background-image:url('<?php echo $img; ?>/housing/housing-head.jpg')">
  <div class="inner">
    <p class="en">HOUSING</p>
    <span class="jp">住宅事業</span>
  </div>
</section>

<!-- ========== リード ========== -->
<section class="hous-lead-sec">
  <div class="wrap">
    <p class="hous-lead-txt">
      丸七高橋組では、地域に寄り添う住まいづくりを目指した<br class="br-pc">
      住宅事業にも取り組んでいます
    </p>
  </div>
</section>

<!-- ========== EVENT ========== -->
<section class="hous-sec band">
  <div class="wrap">
    <div class="hous-head-row">
      <div class="sec-head">
        <p class="en-title">EVENT</p>
        <span class="jp-sub">イベント</span>
      </div>
      <a href="<?php echo esc_url(home_url('/news/')); ?>" class="more">MORE <span class="arrow">&gt;</span></a>
    </div>

    <div class="hous-events">
      <a href="<?php echo esc_url(home_url('/news/')); ?>" class="hous-event">
        <div class="thumb">
          <img src="<?php echo $img; ?>/housing/event-dummy01.jpg" alt="家づくりワークショップ">
        </div>
        <span class="badge">EVENT</span>
        <p class="date">2025.00.00</p>
        <p class="ttl">【随時開催中】家づくりワークショップ</p>
      </a>
      <a href="<?php echo esc_url(home_url('/news/')); ?>" class="hous-event">
        <div class="thumb">
          <img src="<?php echo $img; ?>/housing/event-dummy02.jpg" alt="Naturie いつでも家づくり相談会">
        </div>
        <span class="badge">EVENT</span>
        <p class="date">2025.00.00</p>
        <p class="ttl">【Naturie】いつでも家づくり相談会</p>
      </a>
      <a href="<?php echo esc_url(home_url('/news/')); ?>" class="hous-event">
        <div class="thumb">
          <img src="<?php echo $img; ?>/housing/event-dummy03.jpg" alt="COZY いつでも家づくり相談会">
        </div>
        <span class="badge">NEWS</span>
        <p class="date">2025.00.00</p>
        <p class="ttl">【COZY】いつでも家づくり相談会</p>
      </a>
    </div>
  </div>
</section>

<!-- ========== 画像＋テキスト ========== -->
<section class="hous-sec">
  <div class="wrap">
    <div class="media-row hous-media">
      <div class="media-img"><img src="<?php echo $img; ?>/housing/housing02.jpg" alt="地域に寄り添う住まいづくり"></div>
      <div class="media-txt">
        <h3>地域に寄り添う<br class="br-pc">これからの住まいづくり</h3>
        <p>
          丸七高橋組の住宅事業部では、「COZY北見」と「ナチュリエ北見」<br class="br-pc">
          を通じて、北見・オホーツクエリアの住まいづくりを行っています。家<br class="br-pc">
          族構成や暮らし方、好みやこだわりはお客様によってさまざまです。<br class="br-pc">
          だからこそ、一人ひとりの理想の暮らしに寄り添いながら、毎日を心<br class="br-pc">
          地よく、自分らしく過ごせる住まいを提案。地域に根ざした住宅事業<br class="br-pc">
          を通じて、これからの暮らしを支えています。
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ========== BRAND ========== -->
<section class="hous-sec band">
  <div class="wrap">
    <div class="sec-head">
      <p class="en-title">BRAND</p>
      <span class="jp-sub">ブランド</span>
    </div>

    <!-- COZY -->
    <div class="hous-brand-media">
      <div class="media-img"><img src="<?php echo $img; ?>/housing/housing-plan01.jpg" alt="COZY 家は、シンプルでいい"></div>
      <div class="media-txt">
        <p class="tagline">家は、シンプルでいい</p>
        <p class="brand">COZY</p>
        <p class="body">
          シンプルデザイン×しっかり性能<br>
          あらかじめ基本設計されたシンプルなデザインに、確かな性能を備<br class="br-pc">
          えた規格住宅。<br>
          スタンダードプランは150以上。インテリアは4つのテイストをご用意<br class="br-pc">
          しています。<br>
          楽しんで選ぶスマートな家づくりで、ライフスタイルと好みにあった住<br class="br-pc">
          まいが実現します。
        </p>
        <a href="https://fc.cozy-home.jp/" target="_blank" rel="noopener" class="more">MORE <span class="arrow">&gt;</span></a>
      </div>
    </div>

    <!-- Naturie -->
    <div class="hous-brand-media">
      <div class="media-img"><img src="<?php echo $img; ?>/housing/housing-plan02.jpg" alt="Naturie 自然素材の家"></div>
      <div class="media-txt">
        <p class="tagline">自然素材の家</p>
        <p class="brand">Naturie</p>
        <p class="body">
          ナチュラル＆スローな家。新しいのに懐かしくて、気持ちいい。<br>
          家族で育てる、やさしい暮らし。<br>
          味わいのある自然素材を使用したアンティークで「かわいい」お家。<br>
          ムクのフローリングや梁・柱、<br>
          調湿効果のある塗り壁や天然素材の塗料など、自然のぬくもりたっ<br class="br-pc">
          ぷりの素材を採用しています。<br>
          暮らすほどに愛おしい、味わいが深まる住まいをお届けします。
        </p>
        <a href="https://www.naturie.jp/" target="_blank" rel="noopener" class="more">MORE <span class="arrow">&gt;</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ========== WORKS ========== -->
<section class="hous-sec">
  <div class="wrap">
    <div class="hous-head-row">
      <div class="sec-head">
        <p class="en-title">WORKS</p>
        <span class="jp-sub">施工実績</span>
      </div>
      <a href="<?php echo esc_url(home_url('/works/')); ?>" class="more">ALL LIST <span class="arrow">&gt;</span></a>
    </div>

    <div class="hous-works-wrap">
      <span class="hous-works-arrow prev" aria-hidden="true">&lsaquo;</span>
      <div class="hous-works">
        <a href="<?php echo esc_url(home_url('/works/')); ?>" class="hous-work">
          <div class="thumb"><img src="<?php echo $img; ?>/housing/housing-works-dummy01.jpg" alt="施工事例 name"></div>
          <h4>name</h4>
          <span class="more">MORE <span class="arrow">&gt;</span></span>
        </a>
        <a href="<?php echo esc_url(home_url('/works/')); ?>" class="hous-work">
          <div class="thumb"><img src="<?php echo $img; ?>/housing/housing-works-dummy02.jpg" alt="施工事例 name"></div>
          <h4>name</h4>
          <span class="more">MORE <span class="arrow">&gt;</span></span>
        </a>
        <a href="<?php echo esc_url(home_url('/works/')); ?>" class="hous-work">
          <div class="thumb"><img src="<?php echo $img; ?>/housing/housing-works-dummy03.jpg" alt="施工事例 name"></div>
          <h4>name</h4>
          <span class="more">MORE <span class="arrow">&gt;</span></span>
        </a>
      </div>
      <span class="hous-works-arrow next" aria-hidden="true">&rsaquo;</span>
    </div>

    <!-- その他の施工事例 -->
    <p class="hous-works-all">その他の施工事例はこちら</p>
    <a href="<?php echo esc_url(home_url('/works/')); ?>" class="band-link band-900">
      <img src="<?php echo $img; ?>/housing/rainier-homes-brn.jpg" alt="Housing Division">
      <span class="label">Housing Division<span class="jp">住宅事業部</span></span>
    </a>
  </div>
</section>

<!-- ========== CONTACT ========== -->
<section class="hous-sec" style="padding-top:0;">
  <div class="wrap">
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="contact-box hous-contact-box">
      <div class="txt">
        <p class="en">CONTACT</p>
        <span class="jp">お問い合わせ・資料請求</span>
      </div>
      <span class="arrow">&gt;</span>
    </a>
  </div>
</section>

<!-- ========== ACCESS（左テキスト・右マップ） ========== -->
<section class="hous-sec" style="padding-top:0;">
  <div class="wrap">
    <div class="hous-access">
      <div class="hous-access-info">
        <p class="hous-access-ttl">北見営業所</p>
        <p class="hous-access-addr">〒090-0834<br>北海道北見市とん田西町218番地13号 1F<br>営業時間 9:00〜17:00（日・祝休）</p>
        <p class="hous-access-tel">TEL 0120-437-745</p>
      </div>
      <div class="map">
        <iframe src="https://maps.google.com/maps?q=北海道北見市とん田西町218番地13号&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- ========== 下部 RECRUIT 枠（900×320） ========== -->
<div class="hous-sec" style="padding:0 0 90px;">
  <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="band-link band-900">
    <img src="<?php echo $img; ?>/housing/recruit-brn.jpg" alt="採用情報">
    <span class="label">RECRUIT<span class="jp">採用情報</span></span>
  </a>
</div>

<?php get_footer();
