<?php
/* Template Name: エントリー（応募フォーム） */
if (!defined('ABSPATH')) exit;
get_header();
// 求人一覧のENTRYボタンから ?recruit=<ID> で来た場合、募集要項を自動プリセット
$job = '';
if (isset($_GET['recruit'])) {
    $job = get_the_title((int) $_GET['recruit']);
}
?>

<!-- ========== ページタイトル ========== -->
<section class="page-title">
  <p class="en">ENTRY</p>
  <span class="jp">応募フォーム</span>
</section>

<!-- ========== イントロ ========== -->
<section class="cf-intro wrap">
  <p class="cf-note">下記フォームにご記入のうえ送信してください。<br>内容を確認のうえ、担当者よりご連絡いたします。</p>
</section>

<!-- ========== フォーム ========== -->
<section class="section" style="padding-top:24px;">
  <form class="cf-form" action="#" method="post">

    <div class="cf-row">
      <label class="cf-label" for="ef-subject">件名<span class="cf-req">-必須</span></label>
      <div class="cf-field">
        <select class="cf-select" id="ef-subject" name="subject" required>
          <option value="">選択してください</option>
          <option value="求人について"<?php echo $job ? ' selected' : ''; ?>>求人について</option>
          <option value="その他お問い合わせ">その他お問い合わせ</option>
        </select>
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="ef-job">募集要項</label>
      <div class="cf-field">
        <input class="cf-input" type="text" id="ef-job" name="job" value="<?php echo esc_attr($job); ?>">
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="ef-name">氏名<span class="cf-req">-必須</span></label>
      <div class="cf-field"><input class="cf-input" type="text" id="ef-name" name="name" required></div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="ef-kana">フリガナ<span class="cf-req">-必須</span></label>
      <div class="cf-field"><input class="cf-input" type="text" id="ef-kana" name="kana" required></div>
    </div>

    <div class="cf-row">
      <label class="cf-label">性別<span class="cf-req">-必須</span></label>
      <div class="cf-field">
        <div class="cf-radio">
          <label><input type="radio" name="gender" value="男性" required> 男性</label>
          <label><input type="radio" name="gender" value="女性"> 女性</label>
        </div>
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="ef-birth">生年月日<span class="cf-req">-必須</span></label>
      <div class="cf-field"><input class="cf-input" type="text" id="ef-birth" name="birth" placeholder="例：1995 / 04 / 01" required></div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="ef-tel">お電話番号</label>
      <div class="cf-field"><input class="cf-input" type="text" id="ef-tel" name="tel" inputmode="tel"></div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="ef-email">メールアドレス<span class="cf-req">-必須</span></label>
      <div class="cf-field"><input class="cf-input" type="email" id="ef-email" name="email" required></div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="ef-email2">メールアドレス（確認用）<span class="cf-req">-必須</span></label>
      <div class="cf-field"><input class="cf-input" type="email" id="ef-email2" name="email_confirm" required></div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="ef-zip1">郵便番号</label>
      <div class="cf-field">
        <div class="cf-zip">
          <input class="cf-input" type="text" id="ef-zip1" name="zip1" inputmode="numeric" maxlength="3">
          <span class="cf-dash">-</span>
          <input class="cf-input" type="text" id="ef-zip2" name="zip2" inputmode="numeric" maxlength="4">
          <button class="cf-zip-btn" type="button">住所自動入力</button>
        </div>
      </div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="ef-pref">都道府県</label>
      <div class="cf-field"><input class="cf-input" type="text" id="ef-pref" name="pref"></div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="ef-city">市町村</label>
      <div class="cf-field"><input class="cf-input" type="text" id="ef-city" name="city"></div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="ef-qual">資格</label>
      <div class="cf-field"><textarea class="cf-textarea" id="ef-qual" name="qualification"></textarea></div>
    </div>

    <div class="cf-row">
      <label class="cf-label" for="ef-motivation">志望動機<span class="cf-req">-必須</span></label>
      <div class="cf-field"><textarea class="cf-textarea" id="ef-motivation" name="motivation" required></textarea></div>
    </div>

    <div class="cf-row">
      <label class="cf-label">プライバシーポリシー<span class="cf-req">-必須</span></label>
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
      <button class="cf-submit" type="submit">確認する</button>
    </div>

  </form>
</section>

<?php get_footer();
