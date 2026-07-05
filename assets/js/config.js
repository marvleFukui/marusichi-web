/* =========================================================
   丸七高橋組 — サイト共通設定（外部リンク・定数）
   data-link="instagram|line|recruit-movie|tel-honsha|tel-kitami"
   を持つ要素に main.js が href を注入します。
   ========================================================= */
window.SITE = {
  // 外部リンク（確定後に差し替え）
  INSTAGRAM_URL: "https://www.instagram.com/",
  RECRUIT_MOVIE_URL: "",          // 採用ムービー(YouTube等)。未定なら空
  CORPORATE_MOVIE_URL: "",        // 企業紹介ムービー

  // 電話
  TEL_HONSHA: "0152-23-2441",
  TEL_KITAMI: "0157-57-1533",

  // WordPress（NEWS/CONTACT を後日WP化する場合のAPIベース）
  WP_API_BASE: "/news"
};
