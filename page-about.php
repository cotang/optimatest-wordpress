<?php
/**
 * Template Name: Page about
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package optimatest2017
 */

get_header(); ?>

<main>
  <section class="page page--about">
    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-xl-9">
          <!-- Content about-->
          <?php while ( have_posts() ) : the_post(); ?>
            <section class="content-about" itemscope="itemscope" itemtype="http://schema.org/Article">
              <div class="container">
                <h1 class="content-about__title" itemprop="headline"><?php the_title(); ?></h1>
                <div class="content-about__text" itemprop="articleBody">
                  <?php the_content(); ?>
                </div>
              </div>
              <!-- Advantages facts-->
              <section class="advantages-facts">
                <div class="container">
                  <div class="row">
                    <div class="fact col-xs-12 col-md-6 col-xl-4">
                      <div class="fact__inner">Мы работаем более&nbsp;
                        <strong class="strong">17 лет&ensp;</strong>в сфере сертификации</div>
                    </div>
                    <div class="fact col-xs-12 col-md-6 col-xl-4">
                      <div class="fact__inner">Каждый месяц мы обрабатываем
                        <strong class="strong">более 500 заявок&ensp;</strong>
                      </div>
                    </div>
                    <div class="fact col-xs-12 col-md-6 col-xl-4">
                      <div class="fact__inner">
                        <strong class="strong">Более 90% заказчиков&ensp;</strong>становятся постоянными клиентами</div>
                    </div>
                    <div class="fact col-xs-12 col-md-6 col-xl-4">
                      <div class="fact__inner">Требуется всего&ensp;
                        <strong class="strong">15 минут,&ensp;</strong>чтобы подготовить лучшее предложение для клиента</div>
                    </div>
                    <div class="fact col-xs-12 col-md-6 col-xl-4">
                      <div class="fact__inner">В перечне наших услуг
                        <strong class="strong">48&ensp;</strong>различных разрешительных
                        <strong class="strong">документов&ensp;</strong>для компаний</div>
                    </div>
                    <div class="fact col-xs-12 col-md-6 col-xl-4">
                      <div class="fact__inner">
                        <strong class="strong">0 рублей&nbsp;</strong>стоит отправка документов в любую точку страны.</div>
                    </div>
                  </div>
                </div>
              </section>
              <div class="content-about__btn">Остались вопросы?
                <a class="btn" href="#" data-form="question">Обращайтесь</a>
              </div>
            </section>
          <?php endwhile; ?>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
    <!-- Procedure-->
    <?php get_template_part( 'template-parts/procedure' ); ?>
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
    <!-- Form question-->
    <section class="form-question">
      <div class="container">
        <div class="form-question__inner">
          <h2 class="form-question__title">Станьте нашим клиентом и мы приготовим лучшее предложение для Вас!</h2>
          <!-- MCC form question-->
          <?php echo do_shortcode('[mcc-questions-onlyform]'); ?>
        </div>
      </div>
    </section>
  </section>
</main>

<?php
get_footer();
