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
    var footerHeight = $(".p-footer").outerHeight();
    if (scrollPosition > 70) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
    if (bodyHeight - scrollPosition <= windowHeight + footerHeight) {
      pageTop.css({
        position: "absolute",
        bottom: footerHeight + 6 + "px"
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
document.addEventListener("DOMContentLoaded", function () {
  var modal = document.querySelector(".js-modal");
  var modalWrap = modal.querySelector(".p-modal__wrap");
  var modalImgContainer = modal.querySelector(".p-modal__img");
  var modalImg = modalImgContainer.querySelector("img");
  var modalClose = document.querySelector(".p-modal__close-button");
  var prevButton = document.querySelector(".p-modal__prev");
  var nextButton = document.querySelector(".p-modal__next");
  var currentIndex = 0;
  var imageSources = [];
  var modalTriggers = document.querySelectorAll(".js-modal-trigger");
  modalTriggers.forEach(function (trigger, index) {
    imageSources.push(trigger.getAttribute("href"));
    trigger.setAttribute("data-index", index);
    trigger.addEventListener("click", function (e) {
      e.preventDefault();
      currentIndex = parseInt(this.getAttribute("data-index"));
      openModal(this.getAttribute("href"));
    });
  });
  function openModal(imgSrc) {
    modalImg.src = imgSrc;
    modal.classList.add("show");
    modalWrap.classList.add("show");
    modal.style.visibility = "visible";
    updateButtonStates();
    document.body.style.overflow = "clip"; // モーダルが開いている間はbodyのスクロールを無効化
  }

  function updateModalImage(index) {
    modalImg.src = imageSources[index];
    updateButtonStates();
  }
  function updateButtonStates() {
    prevButton.classList.toggle("is-disabled", currentIndex <= 0);
    nextButton.classList.toggle("is-disabled", currentIndex >= imageSources.length - 1);
  }
  prevButton.addEventListener("click", function () {
    if (currentIndex > 0) {
      currentIndex--;
      updateModalImage(currentIndex);
    }
  });
  nextButton.addEventListener("click", function () {
    if (currentIndex < imageSources.length - 1) {
      currentIndex++;
      updateModalImage(currentIndex);
    }
  });
  function closeModal() {
    modal.classList.remove("show");
    modalWrap.classList.remove("show");
    modal.addEventListener("transitionend", function onTransitionEnd() {
      modal.style.visibility = "hidden";
      modal.removeEventListener("transitionend", onTransitionEnd);
      document.body.style.overflow = ""; // モーダルが閉じるとbodyのスクロールを再度有効化
    });
  }

  modal.addEventListener("click", function (e) {
    if (e.target === modal) {
      closeModal();
    }
  });
  modalClose.addEventListener("click", closeModal);
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" || e.key === "Esc") {
      closeModal();
    }
  });
});