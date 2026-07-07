<?php
/* Template Name: サンクス（応募） */
if (!defined('ABSPATH')) exit;
get_header();
?>

<section class="page-title">
  <p class="en">THANK YOU</p>
  <span class="jp">応募完了</span>
</section>

<section class="section">
  <div class="wrap cf-thanks">
    <p class="cf-thanks-ttl">ご応募ありがとうございました。</p>
    <p class="cf-thanks-body">
      この度はご応募いただき、誠にありがとうございます。<br>
      内容を確認のうえ、担当者より追ってご連絡いたします。<br>
      今しばらくお待ちくださいますようお願いいたします。
    </p>
    <div class="cf-thanks-btns">
      <a href="<?php echo esc_url(get_post_type_archive_link('recruit_post')); ?>" class="cf-thanks-btn ghost">求人情報へ戻る</a>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="cf-thanks-btn">HOME へ戻る</a>
    </div>
  </div>
</section>

<?php get_footer();
