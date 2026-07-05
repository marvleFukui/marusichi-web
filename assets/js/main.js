/* =========================================================
   丸七高橋組 — 共通スクリプト
   - ドロワー開閉
   - 外部リンク注入（config.js）
   - ヒーロースライダー（自動 / ドット）
   ========================================================= */
(function () {
  "use strict";

  /* ---------- ドロワー ---------- */
  var ham = document.querySelector(".hamburger");
  if (ham) {
    ham.addEventListener("click", function () {
      document.body.classList.toggle("drawer-open");
    });
    document.querySelectorAll(".drawer a").forEach(function (a) {
      a.addEventListener("click", function () {
        document.body.classList.remove("drawer-open");
      });
    });
  }

  /* ---------- 外部リンク注入 ---------- */
  var S = window.SITE || {};
  var linkMap = {
    instagram: S.INSTAGRAM_URL,
    "recruit-movie": S.RECRUIT_MOVIE_URL,
    "corporate-movie": S.CORPORATE_MOVIE_URL,
    "tel-honsha": S.TEL_HONSHA ? "tel:" + S.TEL_HONSHA.replace(/-/g, "") : "",
    "tel-kitami": S.TEL_KITAMI ? "tel:" + S.TEL_KITAMI.replace(/-/g, "") : ""
  };
  document.querySelectorAll("[data-link]").forEach(function (el) {
    var url = linkMap[el.getAttribute("data-link")];
    if (url) {
      el.setAttribute("href", url);
      if (/^https?:/.test(url)) { el.setAttribute("target", "_blank"); el.setAttribute("rel", "noopener"); }
    }
  });

  /* ---------- ヒーロースライダー ---------- */
  var slides = Array.prototype.slice.call(document.querySelectorAll(".hero-slide"));
  var dots = Array.prototype.slice.call(document.querySelectorAll(".hero-dots button"));
  if (slides.length > 1) {
    var idx = 0, timer;
    function go(n) {
      slides[idx].classList.remove("is-active");
      if (dots[idx]) dots[idx].classList.remove("is-active");
      idx = (n + slides.length) % slides.length;
      slides[idx].classList.add("is-active");
      if (dots[idx]) dots[idx].classList.add("is-active");
    }
    function next() { go(idx + 1); }
    function play() { timer = setInterval(next, 5000); }
    function reset() { clearInterval(timer); play(); }
    dots.forEach(function (d, i) {
      d.addEventListener("click", function () { go(i); reset(); });
    });
    play();
  }
})();
