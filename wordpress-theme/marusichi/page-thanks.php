<?php
/* Template Name: サンクス（お問い合わせ） */
if (!defined('ABSPATH')) exit;
get_header();
?>

<section class="page-title">
  <p class="en">THANK YOU</p>
  <span class="jp">送信完了</span>
</section>

<section class="section">
  <div class="wrap cf-thanks">
    <p class="cf-thanks-ttl">お問い合わせありがとうございました。</p>
    <p class="cf-thanks-body">
      この度はお問い合わせいただき、誠にありがとうございます。<br>
      内容を確認のうえ、3営業日以内に担当者よりご連絡いたします。<br>
      万が一、行き違い等でご連絡がない場合は、<br class="br-sp">お手数ですがお電話にてお問い合わせください。
    </p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="cf-thanks-btn">HOME へ戻る</a>
  </div>
</section>

<?php get_footer();
