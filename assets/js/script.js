"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  // ハンバーガーメニュー
  $(".js-hamburger").click(function () {
    $(this).toggleClass("is-open");
    if ($(this).hasClass("is-open")) {
      openDrawer();
    } else {
      closeDrawer();
    }
  });
  // backgroundまたはページ内リンクをクリックで閉じる
  $(".js-drawer, .js-drawer a[href]").on("click", function () {
    closeDrawer();
  });
  // resizeイベント
  $(window).on("resize", function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      closeDrawer();
    }
  });

  // Drawerの開閉
  function openDrawer() {
    $(".js-drawer").addClass("is-open");
    $(".js-hamburger").addClass("is-open");
    $("body").addClass("is-fixed");
  }
  function closeDrawer() {
    $(".js-drawer").removeClass("is-open");
    $(".js-hamburger").removeClass("is-open");
    $("body").removeClass("is-fixed");
  }

  // ページトップボタン
  var pageTop = $(".js-pagetop");
  pageTop.hide();
  $(window).scroll(function () {
    var scrollPosition = $(this).scrollTop();
    var windowHeight = $(this).height();
    var bodyHeight = $(document).height();
    var footerHeight = $(".footer").outerHeight();
    var buttonHeightHalf = pageTop.outerHeight() / 2;
    if (scrollPosition > 70) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
    if (bodyHeight - scrollPosition <= windowHeight + footerHeight) {
      pageTop.css({
        position: "absolute",
        bottom: footerHeight - buttonHeightHalf + "px",
      });
    } else {
      pageTop.css({
        position: "fixed",
        bottom: "20px",
      });
    }
  });
  pageTop.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  // Fvスライダー
  var fvSwiper = new Swiper(".js-fv-swiper", {
    loop: true,
    clickable: true,
    // autoplay: {
    //   delay: 1000,
    // },
  });

  // Aboutスライダー
  // var swiperSlides = document.getElementsByClassName("swiper-slide");
  // var breakPoint = 767; // ブレークポイントを設定
  // var swiper;
  // var swiperBool;
  // window.addEventListener(
  //   "load",
  //   function () {
  //     if (breakPoint < window.innerWidth) {
  //       swiperBool = false;
  //     } else {
  //       createSwiper();
  //       swiperBool = true;
  //     }
  //   },
  //   false
  // );
  // window.addEventListener(
  //   "resize",
  //   function () {
  //     if (breakPoint < window.innerWidth && swiperBool) {
  //       swiper.destroy(false, true);
  //       swiperBool = false;
  //     } else if (breakPoint >= window.innerWidth && !swiperBool) {
  //       createSwiper();
  //       swiperBool = true;
  //     }
  //   },
  //   false
  // );
  // var createSwiper = function createSwiper() {
  //   aboutSwiper = new Swiper(".js-about-swiper", {
  //     loop: true,
  //     speed: 1500,
  //     // centeredSlides: true,
  //     // slidesPerView: "auto",
  //     // autoplay: {
  //     //   // 自動再生
  //     //   delay: 1000, // 1秒後に次のスライド
  //     //   disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
  //     // },
  //     // ページネーション
  //     pagination: {
  //       el: ".swiper-pagination",
  //       clickable: true, // クリック可能にする
  //     },

  //     // 前後の矢印
  //     navigation: {
  //       nextEl: ".swiper-button-next",
  //       prevEl: ".swiper-button-prev",
  //     },
  //   });
  // };
  var breakPoint = 767; // ブレークポイントを設定

  // aboutSwiperの初期化関数
  var aboutSwiper;
  function initializeAboutSwiper() {
    aboutSwiper = new Swiper(".js-about-swiper", {
      loop: true,
      speed: 1500,
      pagination: {
        el: ".js-about-swiper .swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".js-about-swiper .swiper-button-next",
        prevEl: ".js-about-swiper .swiper-button-prev",
      },
    });
  }

  // aboutSwiperの無効化関数
  function destroyAboutSwiper() {
    if (aboutSwiper !== undefined) {
      aboutSwiper.destroy();
      aboutSwiper = undefined;
    }
  }

  // ウィンドウのリサイズイベントに応じてSwiperの有効/無効を切り替え
  function handleSwiperResize() {
    if (window.innerWidth <= breakPoint && aboutSwiper === undefined) {
      initializeAboutSwiper();
    } else if (window.innerWidth > breakPoint && aboutSwiper !== undefined) {
      destroyAboutSwiper();
    }
  }

  // イベントリスナーの設定
  window.addEventListener("load", handleSwiperResize);
  window.addEventListener("resize", handleSwiperResize);
});
