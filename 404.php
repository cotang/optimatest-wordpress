<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package optimatest2017
 */

get_header(); ?>

<main>
  <section class="page page--not-found">
    <!-- Not found-->
    <section class="not-found">
      <div class="container">
        <h1 class="not-found__title">Ой,
          <span>404</span>ошибка</h1>
        <div class="not-found__text">
          <p>Если у вас еще нет сертификата качества, есть риск возникновения ошибки посерьёзней</p>
        </div>
        <div class="not-found__btn">Чтобы избежать этого
          <a class="btn" href="#" data-form="application">Закажите сертификат</a>
        </div>
      </div>
    </section>
  </section>
</main>

<?php
get_footer();
