<?php
/* Template Name: お問い合わせ */
if (!defined('ABSPATH')) exit;
get_header();
$img = get_template_directory_uri() . '/images';
?>

<!-- ========== ページタイトル ========== -->
<section class="page-title">
  <p class="en">CONTACT</p>
  <span class="jp">お問い合わせ</span>
</section>

<!-- ========== イントロ ========== -->
<section class="cf-intro wrap">
  <p class="cf-note">お問い合わせには3営業日以内にご返信をいたします。<br>連絡がない場合、お手数をお掛けいたしますが、<br>お電話にてご連絡いただくようお願いいたします。</p>
  <p class="cf-tel">0152-23-2441</p>
  <p class="cf-hours">営業時間 ／ [平日] 8:00–17:00</p>
</section>

<!-- ========== フォーム ========== -->
<section class="section" style="padding-top:24px;">
  <form class="cf-form" action="#" method="post">

    <div class="cf-row">
      <label class="cf-label" for="cf-subject">件名<span class="cf-req">-必須</span></label>
      <div class="cf-field">
        <select class="cf-select" id="cf-subject" name="subject" required>
          <option value="インターンシップについて">インターンシップについて</option>
          <option value="就職説明会について">就職説明会について</option>
          <option value="募集について">募集について</option>
          <option value="その他お問い合わせ">その他お問い合わせ</option>
        </select>
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="cf-name">氏名<span class="cf-req">-必須</span></label>
      <div class="cf-field">
        <input class="cf-input" type="text" id="cf-name" name="name" required>
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="cf-kana">フリガナ<span class="cf-req">-必須</span></label>
      <div class="cf-field">
        <input class="cf-input" type="text" id="cf-kana" name="kana" required>
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="cf-company">会社名</label>
      <div class="cf-field">
        <input class="cf-input" type="text" id="cf-company" name="company">
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="cf-person">担当者様ご氏名</label>
      <div class="cf-field">
        <input class="cf-input" type="text" id="cf-person" name="person">
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="cf-tel">お電話番号</label>
      <div class="cf-field">
        <input class="cf-input" type="text" id="cf-tel" name="tel">
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="cf-email">メールアドレス<span class="cf-req">-必須</span></label>
      <div class="cf-field">
        <input class="cf-input" type="email" id="cf-email" name="email" required>
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="cf-email2">メールアドレス（確認用）<span class="cf-req">-必須</span></label>
      <div class="cf-field">
        <input class="cf-input" type="email" id="cf-email2" name="email_confirm" required>
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="cf-zip1">郵便番号</label>
      <div class="cf-field">
        <div class="cf-zip">
          <input class="cf-input" type="text" id="cf-zip1" name="zip1" inputmode="numeric" maxlength="3">
          <span class="cf-dash">-</span>
          <input class="cf-input" type="text" id="cf-zip2" name="zip2" inputmode="numeric" maxlength="4">
          <button class="cf-zip-btn" type="button">郵便番号検索</button>
        </div>
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="cf-pref">都道府県</label>
      <div class="cf-field">
        <input class="cf-input" type="text" id="cf-pref" name="pref">
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="cf-city">市区町村</label>
      <div class="cf-field">
        <input class="cf-input" type="text" id="cf-city" name="city">
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="cf-message">お問い合わせ内容<span class="cf-req">-必須</span></label>
      <div class="cf-field">
        <textarea class="cf-textarea" id="cf-message" name="message" required></textarea>
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label">プライバシーポリシー</label>
      <div class="cf-field">
        <div class="cf-privacy">
          <p>株式会社 丸七高橋組（以下、「当社」という。）は、業務内にて取得・使用する個人情報（お名前・電子メールアドレス・お電話番号・ご住所など、個人を特定できる情報。以下、「個人情報」という。）の保護のため、個人情報の保護に関する方針（以下、「本方針」という。）を以下の通り定め、必要な施策の実施およびそれらの継続的な維持・改善に努めます。</p>
          <h4>個人情報の利用目的</h4>
          <p>当社は、個人情報を、お問合わせへの返答やサービスの提供などの業務上必要な範囲で利用するものとします。</p>
          <h4>個人情報の管理</h4>
          <p>当社は、個人情報への不正なアクセスや情報の改ざん、破壊、紛失、漏洩等を防止するため、予防ならびに安全対策に留意します。</p>
          <h4>個人情報の第三者提供</h4>
          <p>当社では、個人情報を第三者に提供することは一切ありません。なお、以下のいずれかに該当する場合は、その限りではありません。</p>
          <p>（1）当人の同意を得ている場合<br>（2）法令等により要求された場合<br>（3）業務委託先へ業務を委託する場合</p>
          <h4>個人情報の開示、訂正、削除</h4>
          <p>当社が管理する個人情報に関して、開示・訂正（追加）・削除をご希望される場合には、お申し出いただいた方ご本人または、ご本人が認める代理人であることを確認した上で、合理的な範囲内で対応いたします。ただし、第三者の利益を害する恐れのある場合、または当社の業務に著しく支障をきたすと判断した場合は、この限りではありません。</p>
          <h4>個人情報保護方針の改善</h4>
          <p>当社は、個人情報の取り扱いに関する法令等を遵守するとともに、本方針を適宜見直し、改善を図ってまいります。</p>
        </div>
        <label class="cf-agree">
          <input type="checkbox" name="agree" required>
          <span>上記にご同意いただいた上で、左のチェックボックスにチェックを入れてください。</span>
        </label>
      </div>
    </div>

    <div class="cf-submit-wrap">
      <button class="cf-submit" type="submit">確認画面へ</button>
    </div>

  </form>
</section>

<?php get_footer();
