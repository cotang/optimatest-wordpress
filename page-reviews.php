<?php
/**
 * Template Name: Page reviews
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package optimatest2017
 */

get_header(); ?>

<main>
  <section class="page page--reviews">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-xl-9">
          <!-- Gratitude-->
          <section class="gratitude">
            <div class="container">
              <h1 class="gratitude__title">Благодарственные письма</h1>
              <ul class="gratitude__pics row">
                <li class="gratitude__item col-xs-12 col-md-6 col-xl-4">
                  <div class="gratitude__img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/letters/1.jpg" alt="Благодарность">
                  </div>
                </li>
                <li class="gratitude__item col-xs-12 col-md-6 col-xl-4">
                  <div class="gratitude__img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/letters/blagodarnost.jpg" alt="Благодарность">
                  </div>
                </li>
                <li class="gratitude__item col-xs-12 col-md-6 col-xl-4">
                  <div class="gratitude__img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/letters/blagodarnost-001.jpg" alt="Благодарность">
                  </div>
                </li>
              </ul>
              <!-- Reviews form -->
              <div class="reviews-form">
                <div class="reviews-form__inner">
                  <h2 class="reviews-form__title">Оставьте о нас отзыв</h2>
                  <!-- MCC form review-->
                  <?php echo do_shortcode('[mcc-comments perpage=0 show_form=1]');?>
                </div>
              </div>
            </div>
          </section>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>

    <!-- Reviews-->
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">Отзывы</h2>
        <?php echo do_shortcode('[mcc-comments perpage=10 show_form=0 count_words=99999]');?>
      </div>
    </section>
    <!-- Russia map-->
    <section class="russia-map">
      <div class="container">
        <h2 class="russia-map__title">К нам обращаются клиенты по всей России</h2>
        <div class="russia-map__map">
          <div class="russia-map__pins"></div>
        </div>
        <div class="russia-map__btn">
          <a class="russia-map__link" href="page-clients.html" data-form="application">Присоединиться к списку</a>
        </div>
      </div>
    </section>
    <!-- Clients-->
    <?php get_template_part( 'template-parts/clients' ); ?>
  </section>
</main>

<?php
get_footer();

/*  [mcc-comments perpage=5 show_form=0 count_words=99999]