<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package optimatest2017
 */

?>

<!-- Footer-->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-xl-2">
        <!-- Logo-->
        <a class="logo-footer" href="<?php echo home_url() ?>" itemscope="itemscope" itemtype="http://schema.org/Brand">
          <img src="<?php bloginfo('template_directory'); ?>/img/logo-footer.png" alt="Логотип Оптиматест Петербург" title="Оптиматест Сертификация" itemprop="logo" />
        </a>
      </div>
      <div class="col-xs-12 col-xl-6">
        <div class="footer-menus">
          <!-- Footer nav-->
          <nav class="footer-nav">
	          <?php wp_nav_menu(array(
	              'container' => false,
	              'theme_location'  => 'footer-main-menu',
	              'menu_class' => 'footer-nav__list',
	              'menu_id' => 'footer-nav__list'
	          )); ?>
          </nav>
          <!-- Footer cert menu-->
          <nav class="footer-cert-menu">
	          <?php wp_nav_menu(array(
	              'container' => false,
	              'theme_location'  => 'footer-articles-menu',
	              'menu_class' => 'footer-cert-menu__list',
	              'menu_id' => 'footer-cert-menu__list'
	          )); ?> 
          </nav>
        </div>
        <div class="footer-contacts" itemscope itemtype="http://schema.org/ContactPoint">
          <div class="footer-contacts__column">
            <a class="footer-contacts__name" href="#" itemprop="areaServed"><?php echo define_offices()[0]['city']; ?></a>
            <div class="footer-contacts__address"><?php echo define_offices()[0]['address']; ?></div>
            <div class="footer-contacts__working-hours">с 9:30 до 18:00</div>
          </div>
          <div class="footer-contacts__column">
            <div class="footer-contacts__tel-wrapper">
              <a class="footer-contacts__tel" href="tel:+78124935927" target="_blank" itemprop="telephone"><?php echo define_offices()[0]['tel'][0]; ?></a>
              <a class="footer-contacts__tel" href="tel:+78129512642" target="_blank" itemprop="telephone"><?php echo define_offices()[0]['tel'][1]; ?></a>
            </div>
            <div class="footer-contacts__email-wrapper">
              <a class="footer-contacts__email" href="mailto:otdel@rostest.net" target="_blank" itemprop="email"><?php echo define_offices()[0]['email']; ?></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-xl-4">
        <section class="footer-form">
          <h2 class="footer-form__title">Перезвоните мне</h2>
          <!-- MCC form call-->
          <?php echo do_shortcode('[mcc-form-call]'); ?>
        </section>
      </div>
      <div class="col-xs-12">
        <div class="copyright">© 2007—<?php echo date('Y') ?> Сертификационный центр «ОптимаТест». Полный спектр услуг в области сертификации</div>
      </div>
    </div>
  </div>
</footer>
<!-- Overlay-->
<div class="overlay">
  <div class="overlay__bg"></div>
  <div class="overlay__form">
    <a class="overlay__close" href="/"></a>
    <!-- Form application-->
    <section class="overlay-form overlay-form--application">
      <h2 class="overlay-form__title">Рассчитать стоимость</h2>
      <!-- MCC form cert-->
      <?php echo do_shortcode('[mcc-form-order]');?>
    </section>
    <!-- Form question-->
    <section class="overlay-form overlay-form--question">
      <h2 class="overlay-form__title">Задать вопрос</h2>
      <!-- MCC form question-->
      <?php echo do_shortcode('[mcc-questions-onlyform]'); ?>
    </section>
    <!-- Form call-->
    <section class="overlay-form overlay-form--call">
      <h2 class="overlay-form__title">Перезвоните мне</h2>
      <!-- MCC form call-->
      <?php echo do_shortcode('[mcc-form-call]'); ?>
    </section>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
