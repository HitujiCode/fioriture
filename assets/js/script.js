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

  // Aboutスライダー
  // window.onload = function () {
  //   const swiperContainer = document.querySelector(".js-about-swiper");

  //   if (swiperContainer) {
  //     let swiper;
  //     let swiperBool = false; // 初期状態ではSwiperは未初期化とする
  //     const breakPoint = 767; // ブレークポイントを設定

  //     const createSwiper = () => {
  //       swiper = new Swiper(swiperContainer, {
  //         loop: true,
  //         speed: 1500,
  //         autoplay: {
  //           disableOnInteraction: false,
  //         },
  //         pagination: {
  //           el: ".swiper-pagination",
  //           clickable: true,
  //         },
  //         navigation: {
  //           nextEl: ".swiper-button-next",
  //           prevEl: ".swiper-button-prev",
  //         },
  //       });
  //       swiperBool = true; // Swiperが初期化されたことを示す
  //     };

  //     // ページロード時にSwiperの初期化を決定
  //     if (window.innerWidth <= breakPoint) {
  //       createSwiper();
  //     }

  //     // ウィンドウのリサイズ時にSwiperの初期化/破棄を決定
  //     window.addEventListener(
  //       "resize",
  //       () => {
  //         if (window.innerWidth > breakPoint && swiperBool) {
  //           swiper.destroy(true, true);
  //           swiperBool = false; // Swiperが破棄されたことを示す
  //         } else if (window.innerWidth <= breakPoint && !swiperBool) {
  //           createSwiper();
  //         }
  //       },
  //       false
  //     );
  //   }
  // };

  // // flowSwiper1
  // window.onload = function () {
  //   const swiperContainer = document.querySelector(".js-flow-swiper1");

  //   if (swiperContainer) {
  //     let swiper;
  //     let swiperBool = false; // 初期状態ではSwiperは未初期化とする
  //     const breakPoint = 767; // ブレークポイントを設定

  //     const createSwiper = () => {
  //       swiper = new Swiper(swiperContainer, {
  //         loop: true,
  //         speed: 1500,
  //         slidesPerView: "auto",
  //         centeredSlides: true,
  //         spaceBetween: 45,
  //         // autoplay: {
  //         //   disableOnInteraction: false,
  //         // },
  //         pagination: {
  //           el: ".swiper-pagination",
  //           clickable: true,
  //         },
  //         navigation: {
  //           nextEl: ".swiper-button-next",
  //           prevEl: ".swiper-button-prev",
  //         },
  //       });
  //       swiperBool = true; // Swiperが初期化されたことを示す
  //     };

  //     // ページロード時にSwiperの初期化を決定
  //     if (window.innerWidth <= breakPoint) {
  //       createSwiper();
  //     }

  //     // ウィンドウのリサイズ時にSwiperの初期化/破棄を決定
  //     window.addEventListener(
  //       "resize",
  //       () => {
  //         if (window.innerWidth > breakPoint && swiperBool) {
  //           swiper.destroy(true, true);
  //           swiperBool = false; // Swiperが破棄されたことを示す
  //         } else if (window.innerWidth <= breakPoint && !swiperBool) {
  //           createSwiper();
  //         }
  //       },
  //       false
  //     );
  //   }
  // };

  // test
  // Swiperの初期化関数を定義
  // function initializeAboutSwiper() {
  //   const swiperContainer = document.querySelector(".js-about-swiper");

  //   if (!swiperContainer) return;

  //   let swiperBool = false; // 初期状態ではSwiperは未初期化とする
  //   const breakPoint = 767; // ブレークポイントを設定

  //   const createSwiper = () => {
  //     const swiper = new Swiper(swiperContainer, {
  //       loop: true,
  //       speed: 1500,
  //       autoplay: {
  //         disableOnInteraction: false,
  //       },
  //       pagination: {
  //         el: swiperContainer.querySelector(".swiper-pagination"),
  //         clickable: true,
  //       },
  //       navigation: {
  //         nextEl: swiperContainer.querySelector(".swiper-button-next"),
  //         prevEl: swiperContainer.querySelector(".swiper-button-prev"),
  //       },
  //     });
  //     swiperBool = true; // Swiperが初期化されたことを示す
  //   };

  //   // ページロードまたはリサイズ時にSwiperの初期化を決定
  //   const checkAndInitializeSwiper = () => {
  //     if (window.innerWidth <= breakPoint && !swiperBool) {
  //       createSwiper();
  //     } else if (window.innerWidth > breakPoint && swiperBool) {
  //       swiper.destroy(true, true);
  //       swiperBool = false; // Swiperが破棄されたことを示す
  //     }
  //   };

  //   checkAndInitializeSwiper();

  //   window.addEventListener("resize", checkAndInitializeSwiper, false);
  // }

  // function initializeFlowSwiper1() {
  //   const swiperContainer = document.querySelector(".js-flow-swiper1");

  //   if (!swiperContainer) return;

  //   let swiperBool = false; // 初期状態ではSwiperは未初期化とする
  //   const breakPoint = 767; // ブレークポイントを設定

  //   const createSwiper = () => {
  //     const swiper = new Swiper(swiperContainer, {
  //       loop: true,
  //       speed: 1500,
  //       centeredSlides: true,
  //       slidesPerView: "auto",
  //       spaceBetween: 45,
  //       pagination: {
  //         el: swiperContainer.querySelector(".swiper-pagination"),
  //         clickable: true,
  //       },
  //       navigation: {
  //         nextEl: swiperContainer.querySelector(".swiper-button-next"),
  //         prevEl: swiperContainer.querySelector(".swiper-button-prev"),
  //       },
  //     });
  //     swiperBool = true; // Swiperが初期化されたことを示す
  //   };

  //   const checkAndInitializeSwiper = () => {
  //     if (window.innerWidth <= breakPoint && !swiperBool) {
  //       createSwiper();
  //     } else if (window.innerWidth > breakPoint && swiperBool) {
  //       swiper.destroy(true, true);
  //       swiperBool = false; // Swiperが破棄されたことを示す
  //     }
  //   };

  //   checkAndInitializeSwiper();

  //   window.addEventListener("resize", checkAndInitializeSwiper, false);
  // }

  // function initializeFlowSwiper2() {
  //   const swiperContainer = document.querySelector(".js-flow-swiper2");

  //   if (!swiperContainer) return;

  //   let swiperBool = false; // 初期状態ではSwiperは未初期化とする
  //   const breakPoint = 767; // ブレークポイントを設定

  //   const createSwiper = () => {
  //     const swiper = new Swiper(swiperContainer, {
  //       loop: true,
  //       speed: 1500,
  //       slidesPerView: "auto",
  //       centeredSlides: true,
  //       spaceBetween: 45,
  //       pagination: {
  //         el: swiperContainer.querySelector(".swiper-pagination"),
  //         clickable: true,
  //       },
  //       navigation: {
  //         nextEl: swiperContainer.querySelector(".swiper-button-next"),
  //         prevEl: swiperContainer.querySelector(".swiper-button-prev"),
  //       },
  //     });
  //     swiperBool = true; // Swiperが初期化されたことを示す
  //   };

  //   const checkAndInitializeSwiper = () => {
  //     if (window.innerWidth <= breakPoint && !swiperBool) {
  //       createSwiper();
  //     } else if (window.innerWidth > breakPoint && swiperBool) {
  //       swiper.destroy(true, true);
  //       swiperBool = false; // Swiperが破棄されたことを示す
  //     }
  //   };

  //   checkAndInitializeSwiper();

  //   window.addEventListener("resize", checkAndInitializeSwiper, false);
  // }

  // // windowのloadイベントリスナーにSwiper初期化関数を追加
  // window.addEventListener("load", function () {
  //   initializeAboutSwiper();
  //   initializeFlowSwiper1();
  //   initializeFlowSwiper2();
  // });

  // test2
  function initializeFlowSwiper1() {
    var flowSwiper1 = document.querySelector(".js-flow-swiper1");
    var swiperInstance = null;
    function createSwiper() {
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
    }
    createSwiper();
    window.addEventListener("resize", createSwiper);
  }
  function initializeFlowSwiper2() {
    var flowSwiper2 = document.querySelector(".js-flow-swiper2");
    var swiperInstance = null;
    function createSwiper() {
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
    }
    createSwiper();
    window.addEventListener("resize", createSwiper);
  }
  function initializeFlowSwiper3() {
    var flowSwiper3 = document.querySelector(".js-flow-swiper3");
    var swiperInstance = null;
    function createSwiper() {
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
    }
    createSwiper();
    window.addEventListener("resize", createSwiper);
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
    initializeFlowSwiper1();
    initializeFlowSwiper2();
    initializeFlowSwiper3();
  });
});