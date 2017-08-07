<?php
/**
 * Template Name: Page offers
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package optimatest2017
 */

get_header(); ?>

<main>
  <section class="page page--offers">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-xl-9">
          <!-- Offers-->
          <section class="offers">
            <div class="container">
              <?php while ( have_posts() ) : the_post(); ?>
                <div class="offers__text">
                  <?php the_content(); ?>
                </div>
              <?php endwhile; ?>
              <div class="row">
                <div class="offer-item col-xs-12 col-md-6 col-xl-4">
                  <div class="offer-item__inner">
                    <h3 class="offer-item__title">Разработка + регистрация ТУ</h3>
                    <div class="offer-item__text">
                      <p>Узнайте стоимость и сроки изготовления у наших специалистов.</p>
                    </div>
                    <div class="offer-item__price">скидка 10%</div>
                    <a class="btn" href="#" data-form="application">Оставить заявку</a>
                  </div>
                </div>
                <div class="offer-item col-xs-12 col-md-6 col-xl-4">
                  <div class="offer-item__inner">
                    <h3 class="offer-item__title">Разработка + регистрация ТУ + разработка ТИ</h3>
                    <div class="offer-item__text">
                      <p>Узнайте стоимость и сроки изготовления у наших специалистов.</p>
                    </div>
                    <div class="offer-item__price">скидка 12%</div>
                    <a class="btn" href="#" data-form="application">Оставить заявку</a>
                  </div>
                </div>
                <div class="offer-item col-xs-12 col-md-6 col-xl-4">
                  <div class="offer-item__inner">
                    <h3 class="offer-item__title">Разработка + регистрация ТУ + декларация ТР ТС</h3>
                    <div class="offer-item__text">
                      <p>Узнайте стоимость и сроки изготовления у наших специалистов.</p>
                    </div>
                    <div class="offer-item__price">скидка 15%</div>
                    <a class="btn" href="#" data-form="application">Оставить заявку</a>
                  </div>
                </div>
                <div class="offer-item col-xs-12 col-md-6 col-xl-4">
                  <div class="offer-item__inner">
                    <h3 class="offer-item__title">Разработка + регистрация ТУ + декларация ТР ТС + ХАССП</h3>
                    <div class="offer-item__text">
                      <p>Узнайте стоимость и сроки изготовления у наших специалистов.</p>
                    </div>
                    <div class="offer-item__price">скидка 20%</div>
                    <a class="btn" href="#" data-form="application">Оставить заявку</a>
                  </div>
                </div>
                <div class="offer-item col-xs-12 col-md-6 col-xl-4">
                  <div class="offer-item__inner">
                    <h3 class="offer-item__title">Декларация соответствия ТР ТС + добровольный сертификат</h3>
                    <div class="offer-item__text">
                      <p>Узнайте стоимость и сроки изготовления у наших специалистов.</p>
                    </div>
                    <div class="offer-item__price">скидка 15%</div>
                    <a class="btn" href="#" data-form="application">Оставить заявку</a>
                  </div>
                </div>
              </div>
              <div class="offers__btn">Скачать коммерческое предложение
                <a class="btn" href="#">скачать</a>
              </div>
            </div>
          </section>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
    <!-- Clients-->
    <?php get_template_part( 'template-parts/clients' ); ?>
  </section>
</main>

<?php
get_footer();
