<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package optimatest2017
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon">
  <script src="https://maps.google.com/maps/api/js?key=AIzaSyCbFBllrMkXPOoe1YbN3aXTYV0cesewVhc"></script>  
  <?php wp_head(); ?>
</head>

<body>

  <!-- Header-->
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__logo">
          <!-- Logo-->
          <a class="logo" href="<?php echo home_url() ?>" itemscope="itemscope" itemtype="http://schema.org/Brand">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Логотип Оптиматест Петербург" title="Оптиматест Сертификация" itemprop="logo" />
          </a>
        </div>
        <div class="header__contacts">
          <!-- City-->
          <div class="city" itemscope="itemscope" itemtype="http://schema.org/ContactPoint">
            <div class="city__column">
              <div class="city__name-wrapper">
                <a class="city__name" href="#" itemprop="areaServed"><?php echo define_offices()[0]['city']; ?></a>
                <?php get_offices_table() ?>
              </div>
              <div class="city__address"><?php echo define_offices()[0]['address']; ?></div>
              <div class="city__working-hours">с 9:30 до 18:00</div>
            </div>
            <div class="city__column">
              <div class="city__tel-wrapper">
                <a class="city__tel" href="tel:+78124935927" target="_blank" itemprop="telephone"><?php echo define_offices()[0]['tel'][0]; ?></a>
                <a class="city__tel" href="tel:+78129512642" target="_blank" itemprop="telephone"><?php echo define_offices()[0]['tel'][1]; ?></a>
              </div>
              <div class="city__email-wrapper">
                <a class="city__email" href="mailto:otdel@rostest.net" target="_blank" itemprop="email"><?php echo define_offices()[0]['email']; ?></a>
              </div>
            </div>
          </div>
        </div>
        <div class="header__social">
          <div class="social">
            <a class="social__link social__link--rss" href="/rss" title="rss link"></a>
            <a class="social__link social__link--vk" href="https://vk.com/serificaty" title="vkontakte link"></a>
            <a class="social__link social__link--tw" href="https://twitter.com/sevtest_ru" title="twitter link"></a>
            <a class="social__link social__link--fb" href=" https://www.facebook.com/sevtest.ru/" title="facebook link"></a>
          </div>
          <a class="btn" href="#" data-form="call">Позвонить</a>
          <div class="header__btn">
            <a class="btn btn--white" href="#">На карте</a>
            <div class="header__map" data-lat="59.907936" data-lng="30.300848"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="header__nav">
      <div class="container">
        <!-- Nav-->
        <nav class="nav">
          <div class="nav__hamburger">
            <a class="hamburger" href="#">
              <span></span>
            </a>
          </div>
          <?php wp_nav_menu(array(
              'container' => false,
              'theme_location'  => 'main-menu',
              'menu_class' => 'nav__list',
              'menu_id' => 'nav__list'
          )); ?>
        </nav>
      </div>
      <!-- Search-->
      <div class="search">
        <div class="search__bg"></div>
        <div class="search__inner">
          <div class="container">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </header>


