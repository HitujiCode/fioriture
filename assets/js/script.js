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
    $("body").css("overflow", "clip");
  }
  function closeDrawer() {
    $(".js-drawer").removeClass("is-open");
    $(".js-hamburger").removeClass("is-open");
    $("body").css("overflow", "");
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
        bottom: footerHeight - buttonHeightHalf + "px"
      });
    } else {
      pageTop.css({
        position: "fixed",
        bottom: "20px"
      });
    }
  });
  pageTop.click(function () {
    $("body,html").animate({
      scrollTop: 0
    }, 300, "swing");
    return false;
  });

  // Fvスライダー
  var fvSwiperContainer = document.querySelector(".js-fv-swiper");
  if (fvSwiperContainer) {
    var fvSwiper = new Swiper(fvSwiperContainer, {
      loop: true,
      effect: "fade",
      speed: 3000,
      fadeEffect: {
        crossFade: true
      },
      autoplay: {
        delay: 2000
      }
    });
  }

  // SPのみスライダー
  function initializeAboutSwiper() {
    var aboutSwiper = document.querySelector(".js-about-swiper");

    // コンテナとナビゲーションボタンが存在するかを確認
    if (aboutSwiper && document.querySelector(".js-about-swiper-next") && document.querySelector(".js-about-swiper-prev")) {
      var createSwiper = function createSwiper() {
        if (window.innerWidth >= 768) {
          if (swiperInstance) {
            swiperInstance.destroy();
            swiperInstance = null;
          }
          clearSwiperStyles(aboutSwiper);
          return;
        }
        if (!swiperInstance) {
          swiperInstance = new Swiper(aboutSwiper, {
            // initialSlide: 0,
            loop: true,
            spaceBetween: 45,
            slidesPerView: "auto",
            centeredSlides: true,
            pagination: {
              el: aboutSwiper.querySelector(".swiper-pagination"),
              clickable: true
            },
            navigation: {
              nextEl: document.querySelector(".js-about-swiper-next"),
              prevEl: document.querySelector(".js-about-swiper-prev")
            }
          });
        }
      };
      var swiperInstance = null;
      createSwiper();
      window.addEventListener("resize", createSwiper);
    }
  }
  function initializeFlowSwiper1() {
    var flowSwiper1 = document.querySelector(".js-flow-swiper1");

    // コンテナとナビゲーションボタンが存在するかを確認
    if (flowSwiper1 && document.querySelector(".js-flow-swiper-next1") && document.querySelector(".js-flow-swiper-prev1")) {
      var createSwiper = function createSwiper() {
        if (window.innerWidth >= 768) {
          if (swiperInstance) {
            swiperInstance.destroy();
            swiperInstance = null;
          }
          clearSwiperStyles(flowSwiper1);
          return;
        }
        if (!swiperInstance) {
          swiperInstance = new Swiper(flowSwiper1, {
            loop: true,
            spaceBetween: 45,
            slidesPerView: "auto",
            centeredSlides: true,
            pagination: {
              el: flowSwiper1.querySelector(".swiper-pagination"),
              clickable: true
            },
            navigation: {
              nextEl: document.querySelector(".js-flow-swiper-next1"),
              prevEl: document.querySelector(".js-flow-swiper-prev1")
            }
          });
        }
      };
      var swiperInstance = null;
      createSwiper();
      window.addEventListener("resize", createSwiper);
    }
  }
  function initializeFlowSwiper2() {
    var flowSwiper2 = document.querySelector(".js-flow-swiper2");

    // コンテナとナビゲーションボタンが存在するかを確認
    if (flowSwiper2 && document.querySelector(".js-flow-swiper-next2") && document.querySelector(".js-flow-swiper-prev2")) {
      var createSwiper = function createSwiper() {
        if (window.innerWidth >= 768) {
          if (swiperInstance) {
            swiperInstance.destroy();
            swiperInstance = null;
          }
          clearSwiperStyles(flowSwiper2);
          return;
        }
        if (!swiperInstance) {
          swiperInstance = new Swiper(flowSwiper2, {
            loop: true,
            spaceBetween: 45,
            slidesPerView: "auto",
            centeredSlides: true,
            pagination: {
              el: flowSwiper2.querySelector(".swiper-pagination"),
              clickable: true
            },
            navigation: {
              nextEl: document.querySelector(".js-flow-swiper-next2"),
              prevEl: document.querySelector(".js-flow-swiper-prev2")
            }
          });
        }
      };
      var swiperInstance = null;
      createSwiper();
      window.addEventListener("resize", createSwiper);
    }
  }
  function initializeFlowSwiper3() {
    var flowSwiper3 = document.querySelector(".js-flow-swiper3");

    // コンテナとナビゲーションボタンが存在するかを確認
    if (flowSwiper3 && document.querySelector(".js-flow-swiper-next3") && document.querySelector(".js-flow-swiper-prev3")) {
      var createSwiper = function createSwiper() {
        if (window.innerWidth >= 768) {
          if (swiperInstance) {
            swiperInstance.destroy();
            swiperInstance = null;
          }
          clearSwiperStyles(flowSwiper3);
          return;
        }
        if (!swiperInstance) {
          swiperInstance = new Swiper(flowSwiper3, {
            initialSlide: 0,
            loop: true,
            spaceBetween: 45,
            slidesPerView: "auto",
            centeredSlides: true,
            pagination: {
              el: flowSwiper3.querySelector(".swiper-pagination"),
              clickable: true
            },
            navigation: {
              nextEl: document.querySelector(".js-flow-swiper-next3"),
              prevEl: document.querySelector(".js-flow-swiper-prev3")
            }
          });
        }
      };
      var swiperInstance = null;
      createSwiper();
      window.addEventListener("resize", createSwiper);
    }
  }
  function clearSwiperStyles(container) {
    if (!container) return;
    // Swiperコンテナのスタイルをクリア
    container.style = "";
    // ページネーションとナビゲーションボタンのスタイルをクリア
    var pagination = container.querySelector(".swiper-pagination");
    if (pagination) pagination.style = "";
    var prevButton = document.querySelector(container.getAttribute("data-prev-button"));
    if (prevButton) prevButton.style = "";
    var nextButton = document.querySelector(container.getAttribute("data-next-button"));
    if (nextButton) nextButton.style = "";
  }
  window.addEventListener("load", function () {
    initializeAboutSwiper();
    initializeFlowSwiper1();
    initializeFlowSwiper2();
    initializeFlowSwiper3();
  });
});

// modal
// 画像が複数ある場合;
var options = {
  // ESCキーで閉じる(初期値：閉じる)
  closeWithEscape: true,
  // スクロールで閉じる(初期値：閉じない)
  closeOnScroll: false,
  // 閉じるボタンの表示(初期値：表示)
  showCloseButton: true,
  // aタグ以外でポップアップさせる場合のオプション(初期値：href)
  sourceAttribute: "href",
  // キャプション(初期値：なし)
  caption: function caption(trigger) {
    return trigger.querySelector("img").getAttribute("alt");
  }
};
var luminousTrigger = document.querySelectorAll(".luminous");
if (luminousTrigger !== null) {
  new LuminousGallery(luminousTrigger, {}, options);
}
// test
$(document).ready(function () {
  // Function to update lum-close-button top value
  function updateCloseButtonTop() {
    var totalHeight = 0;

    // Iterate through each lum-lightbox-position-helper element
    $(".lum-lightbox-position-helper").each(function () {
      // Accumulate the heights of all lum-lightbox-position-helper elements
      totalHeight += $(this).height();
    });

    // Calculate the average height
    var averageHeight = totalHeight / $(".lum-lightbox-position-helper").length;

    // Calculate the top value for lum-close-button
    var closeButtonTop = "calc(50% - " + (averageHeight / 2 + 30) + "px)";

    // Apply the calculated top value to lum-close-button
    $(".lum-close-button").css("top", closeButtonTop);
  }

  // Initial update on document ready
  updateCloseButtonTop();

  // Update lum-close-button top value on window resize
  $(window).on("resize", function () {
    updateCloseButtonTop();
  });
});