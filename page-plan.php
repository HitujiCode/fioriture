<?php get_header(); ?>

<main class="l-main">

  <div class="p-sub-fv">
    <?php if (function_exists('bcn_display')) { ?>
    <div class="p-sub-fv__breadcrumb c-breadcrumb top-breadcrumb">
      <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </div>
    </div>
    <?php } ?>
    <?php get_template_part("parts/fv"); ?>
  </div>

</main>

<?php get_footer(); ?>