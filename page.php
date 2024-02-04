<?php get_header(); ?>

<?php the_content(); ?>

<?php get_footer(); ?>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var swiper = new Swiper('.swiper-container', {
      initialSlide: 0,
      // その他のSwiper設定
    });

    // Swiperの初期化が完了した後に、1枚目のスライドが表示されない問題の対処
    swiper.on('init', function() {
      // Swiperを再初期化
      swiper.update();
    });

    // Swiperの初期化を手動でトリガー
    swiper.init();
  });
</script>
