<?php
/* Template Name: 建築・土木事業 */
if (!defined('ABSPATH')) exit;
get_header();
$img = get_template_directory_uri() . '/images';
?>

<!-- ========== ページヒーロー ========== -->
<section class="page-hero" style="background-image:url('<?php echo $img; ?>/construction/const-head.jpg')">
  <div class="inner">
    <p class="en">CONSTRUCTION</p>
    <span class="jp">建築・技術</span>
  </div>
</section>

<!-- ========== リード ========== -->
<section class="const-lead-sec">
  <div class="wrap">
    <h2 class="const-lead-ttl">北海道・オホーツクの<br class="br-pc">ゼネラルコントラクター</h2>
    <p class="const-lead-txt">
      丸七高橋組は大規模な建築工事や土木工事を一手に請け負い、<br class="br-pc">
      多くの下請け業者を束ねながら、設計から施工まで<br class="br-pc">
      プロジェクト全体を管理する役割を担っています。
    </p>
  </div>
</section>

<!-- ========== ARCHITECTURE 建築 ========== -->
<section class="const-sec band">
  <div class="wrap">
    <div class="sec-head">
      <p class="en-title">ARCHITECTURE</p>
      <span class="jp-sub">建築</span>
    </div>
  </div>

  <!-- 画像＋テキスト（画像を左に全幅） -->
  <div class="const-arch-row">
    <div class="media-img"><img src="<?php echo $img; ?>/construction/const-01.jpg" alt="建築工事の様子"></div>
    <div class="media-txt">
      <h3>斜里・道東エリアを中心に<br class="br-pc">公共工事から民間工事まで幅広く対応</h3>
      <p>
        公共施設や集合住宅、福祉施設、倉庫、事業所など、地域に必要と<br class="br-pc">
        されるさまざまな建物の新築・改修工事に対応。確かな施工力と誠<br class="br-pc">
        実なものづくりを通じて、人々の暮らしや地域の産業を支える建物づ<br class="br-pc">
        くりに取り組んでいます。
      </p>
    </div>
  </div>

  <div class="wrap">
    <!-- 3カード -->
    <div class="cards-3 const-cards">
      <div class="card-item">
        <div class="thumb"><img src="<?php echo $img; ?>/construction/const-02.jpg" alt="公共施設・地域施設"></div>
        <h4>公共施設・地域施設</h4>
        <p>道の駅や庁舎、学校など地域に必要な建物を、安全で使いやすく周辺環境に調和して施工します。</p>
      </div>
      <div class="card-item">
        <div class="thumb"><img src="<?php echo $img; ?>/construction/const-03.jpg" alt="福祉・医療施設"></div>
        <h4>福祉・医療施設</h4>
        <p>高齢者施設や医療施設など、誰もが安心して快適に過ごせる空間を動線等に配慮して施工します。</p>
      </div>
      <div class="card-item">
        <div class="thumb"><img src="<?php echo $img; ?>/construction/const-04.jpg" alt="商業施設・事業所・民間施設"></div>
        <h4>商業施設・事業所・民間施設</h4>
        <p>店舗や事務所、民間施設など、使いやすさと機能性・デザイン性等に配慮した建物を施工します。</p>
      </div>
    </div>
  </div>

  <!-- WORKS 全幅バンド -->
  <div class="const-band-mt">
    <a href="<?php echo esc_url(home_url('/works/')); ?>" class="band-link band-900">
      <img src="<?php echo $img; ?>/construction/civil-works-brn.jpg" alt="建築の施工実績">
      <span class="label">WORKS<span class="jp">施工実績</span></span>
    </a>
  </div>
</section>

<!-- ========== CIVIL ENGINEERING 土木 ========== -->
<section class="const-sec" id="civil" style="scroll-margin-top:90px;">
  <div class="wrap">
    <div class="sec-head">
      <p class="en-title">CIVIL ENGINEERING</p>
      <span class="jp-sub">土木</span>
    </div>
  </div>

  <!-- 画像＋テキスト（画像を左に全幅・ARCHITECTUREと同レイアウト） -->
  <div class="const-arch-row">
    <div class="media-img"><img src="<?php echo $img; ?>/construction/civil01.jpg" alt="土木工事の様子"></div>
    <div class="media-txt">
      <h3>道路・橋・河川から公園まで<br class="br-pc">地域のインフラを構築</h3>
      <p>
        安全な交通環境を支える道路整備や橋梁工事、災害に備える河川改<br class="br-pc">
        修、憩いの場となる公園整備まで、道東のまちを支える土木工事に<br class="br-pc">
        幅広く対応。一つひとつの現場に誠実に向き合い、安心して暮らせる<br class="br-pc">
        地域づくりに貢献しています。
      </p>
    </div>
  </div>

  <div class="wrap">
    <!-- 3カード -->
    <div class="cards-3 const-cards">
      <div class="card-item">
        <div class="thumb"><img src="<?php echo $img; ?>/construction/civil02.jpg" alt="道路・法面工事"></div>
        <h4>道路・法面工事</h4>
        <p>道路改良や法面対策により、安全な通行を確保し地域交通インフラを支えます。</p>
      </div>
      <div class="card-item">
        <div class="thumb"><img src="<?php echo $img; ?>/construction/civil03.jpg" alt="道路維持・環境整備"></div>
        <h4>道路維持・環境整備</h4>
        <p>草刈りや路肩整備などの維持管理で、安全な道路環境を整え、地域の毎日の移動を長く支えます。</p>
      </div>
      <div class="card-item">
        <div class="thumb"><img src="<?php echo $img; ?>/construction/civil04.jpg" alt="河川・水路工事"></div>
        <h4>河川・水路工事</h4>
        <p>河川改修や水路・函渠整備により、水害を防ぎ安心して暮らせる地域の安全を守ります。</p>
      </div>
    </div>
  </div>

  <!-- WORKS 全幅バンド -->
  <div class="const-band-mt">
    <a href="<?php echo esc_url(home_url('/works/')); ?>" class="band-link band-900">
      <img src="<?php echo $img; ?>/construction/const-works-brn.jpg" alt="土木の施工実績">
      <span class="label">WORKS<span class="jp">施工実績</span></span>
    </a>
  </div>
</section>

<!-- ========== 下部 全幅バンド 2連 ========== -->
<div class="const-bottom-bands">
  <a href="<?php echo esc_url(home_url('/housing/')); ?>" class="band-link band-900">
    <img src="<?php echo $img; ?>/construction/housing-brn.jpg" alt="住宅事業">
    <span class="label">HOUSING<span class="jp">住宅事業</span></span>
  </a>
  <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="band-link band-900">
    <img src="<?php echo $img; ?>/construction/recruit-brn.jpg" alt="採用情報">
    <span class="label">RECRUIT<span class="jp">採用情報</span></span>
  </a>
</div>

<?php get_footer();
