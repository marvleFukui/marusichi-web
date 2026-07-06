<?php
/**
 * フッター（共通）
 */
if (!defined('ABSPATH')) exit;
$img = get_template_directory_uri() . '/images';
?>
</main>

<!-- ========== フッター ========== -->
<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-left">
      <div class="footer-logo"><img src="<?php echo esc_url($img); ?>/common/logo_wh.svg" alt="丸七高橋組"></div>
      <div class="footer-office">
        <p class="label">［ 本社 ］</p>
        <p>〒099-4115<br>北海道斜里郡斜里町光陽町16番地8</p>
        <p class="tel">0152-23-2441</p>
      </div>
      <div class="footer-office">
        <p class="label">［ 北見営業所 ］</p>
        <p>〒090-0834<br>北海道北見市とん田西町218番地13号 1F</p>
        <p class="tel">0157-57-1533</p>
      </div>
    </div>
    <div class="footer-right">
      <nav class="footer-nav">
        <div class="row">
          <a href="<?php echo esc_url(home_url('/')); ?>">HOME</a><a href="<?php echo esc_url(home_url('/company/')); ?>">COMPANY</a><a href="<?php echo esc_url(home_url('/construction/')); ?>">CONSTRUCTION</a><a href="<?php echo esc_url(home_url('/housing/')); ?>">HOUSING</a><a href="<?php echo esc_url(home_url('/works/')); ?>">WORKS</a>
        </div>
        <div class="row">
          <a href="<?php echo esc_url(home_url('/recruit/')); ?>">RECRUIT</a><a href="<?php echo esc_url(home_url('/joblist/')); ?>">JOB LIST</a><a href="<?php echo esc_url(home_url('/news/')); ?>">NEWS</a>
        </div>
      </nav>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="footer-contact">CONTACT</a>
    </div>
  </div>
  <div class="footer-bottom">
    <p class="footer-copy">©MARUSHICHI TAKAHASHIGUMI CO., LTD.</p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
