/* =========================================================
   丸七高橋組 — サイト共通設定（外部リンク・定数）
   data-link="instagram|line|recruit-movie|tel-honsha|tel-kitami"
   を持つ要素に main.js が href を注入します。
   ========================================================= */
window.SITE = {
  // 外部リンク
  INSTAGRAM_URL: "https://www.instagram.com/marushichi_takahashi/",
  RECRUIT_SITE_URL: "https://marusichi-takahashigumi-recruit.com/", // 新卒/中途 採用サイト

  // ムービー（YouTube）※モーダル再生。data-movie 属性でも指定可
  RECRUIT_MOVIE_YT: "LJQOzrtByCI",   // TOP RECRUIT MOVIE
  CORPORATE_MOVIE_YT: "gjFNEufrs6M", // COMPANY 企業イメージムービー

  // 電話
  TEL_HONSHA: "0152-23-2441",
  TEL_KITAMI: "0157-57-1533",

  WP_API_BASE: "/news"
};
