<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package optimatest2017
 */
?>

<div class="col-xs-12 col-xl-3">
  <!-- Sidebar-->
  <aside class="sidebar sidebar--static">
    <div class="sidebar-form">
      <h3 class="sidebar-form__title">Бесплатная консультация</h3>
      <!-- MCC form cert-->
      <?php echo do_shortcode('[mcc-form-order]');?>
    </div>
    <!-- Managers block - sidebar-->
    <?php get_managers_sidebar(); ?>
  </aside>
</div>
