<?php
/**
 * Template file for the front page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package optimatest2017
 */

get_header(); ?>

<main>
  <section class="page page--front-page">
    <!-- Banner-->
    <section class="banner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-xl-7">
            <div class="banner-gallery">

              <?php
              $args = array(
                'post_type'   => 'banners', 
                // 'posts_per_page' => 3,
                // 'paged' => get_query_var('paged'), 
                'orderby'   => 'date',
                'order'     => 'ASC'
              );
              $the_query = new WP_Query( $args );
              while ( $the_query->have_posts() ) {
                $the_query->the_post(); 
                ?>

                <div class="banner-gallery__item">
                  <?php the_post_thumbnail(); ?>
                  <h2 class="banner-gallery__title"><?php the_title();?></h2>
                  
                  <?php
                  $otherDocs = get_option( 'inter_other_docs' . get_the_ID(), [] );
                  if( count( $otherDocs ) ) { ?>
                    <a class="btn" href="<?php echo get_permalink( $otherDocs[0] ); ?>">Подробнее</a>
                  <?php } ?>                 
                </div>

              <?php }
              wp_reset_postdata();
              ?> 

            </div>
          </div>
          <div class="col-xs-12 col-xl-5">
            <div class="banner-form">
              <h2 class="banner-form__title">Бесплатная консультация</h2>
              <!-- MCC form cert-->
              <?php echo do_shortcode('[mcc-form-order]');?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Docs-->
    <?php get_template_part( 'template-parts/docs' ); ?>
    <!-- Procedure-->
    <?php get_template_part( 'template-parts/procedure' ); ?>
    <!-- Clients-->
    <section class="clients">
      <div class="container">
        <h2 class="clients__title">С нами уже работают те кто себя зарекомендовал</h2>
        <div class="clients__gallery">
          <div class="clients__slide">
            <div class="clients__logo">
              <img class="clients__img" src="<?php bloginfo('template_directory'); ?>/img/logo-index/aller-petfood.png" alt="aller-petfood" role="presentation" />
            </div>
          </div>
          <div class="clients__slide">
            <div class="clients__logo">
              <img class="clients__img" src="<?php bloginfo('template_directory'); ?>/img/logo-index/Coca-Cola_logo.png" alt="Coca-Cola_logo" role="presentation" />
            </div>
          </div>
          <div class="clients__slide">
            <div class="clients__logo">
              <img class="clients__img" src="<?php bloginfo('template_directory'); ?>/img/logo-index/Siemens_Logo_large_dropshadow-01.png" alt="Siemens_Logo_large_dropshadow-01" role="presentation" />
            </div>
          </div>
          <div class="clients__slide">
            <div class="clients__logo">
              <img class="clients__img" src="<?php bloginfo('template_directory'); ?>/img/logo-index/vielikolukskii-miasokombinat.png" alt="vielikolukskii-miasokombinat" role="presentation" />
            </div>
          </div>
          <div class="clients__slide">
            <div class="clients__logo">
              <img class="clients__img" src="<?php bloginfo('template_directory'); ?>/img/logo-index/бритиш американ тобако.png" alt="бритиш американ тобако" role="presentation" />
            </div>
          </div>
          <div class="clients__slide">
            <div class="clients__logo">
              <img class="clients__img" src="<?php bloginfo('template_directory'); ?>/img/logo-index/ржд.png" alt="ржд" role="presentation" />
            </div>
          </div>
          <div class="clients__slide">
            <div class="clients__logo">
              <img class="clients__img" src="<?php bloginfo('template_directory'); ?>/img/logo-index/сименс.png" alt="сименс" role="presentation" />
            </div>
          </div>
        </div>
        <div class="clients__btn">
          <a class="clients__link" href="#" data-form="call">Присоединиться к списку</a>
        </div>
      </div>
    </section>
    <!-- Advantages-->
    <section class="advantages">
      <div class="container">
        <h2 class="advantages__title">Оптиматест выбирают, потому что:</h2>
        <div class="advantages__banner">
          <ul class="advantages__list">
            <li class="advantages__item advantages__item--active">
              <a class="choise-link" href="#choise1">У нас есть свой сертификационный центр</a>
              <div class="advantages__text">У нас есть свой аккредитованный сертификационный орган, благодаря чему в процессе оформления разрешительной документации нашим специалистам не требуется обращаться в сторонние компании – это значительно экономит нашим клиентам время и деньги. (фото нашей аккредитации)</div>
            </li>
            <li class="advantages__item">
              <a class="choise-link" href="#choise2">«Оптиматест» — это один из старейших сертификационных центров России</a>
              <div class="advantages__text">«Оптиматест» — это один из старейших сертификационных центров России, можно сказать – один из родоначальников этого направления бизнеса. Наш богатый опыт в области оформления разрешительной документации, сертификации продукции и услуг позволяет нам делать свою работу на самом высшем уровне.</div>
            </li>
            <li class="advantages__item">
              <a class="choise-link" href="#choise3">Компания «Оптиматест» сотрудничает с ведущими лабораторными центрами</a>
              <div class="advantages__text">Компания «Оптиматест» сотрудничает с ведущими лабораторными центрами, которые осуществляют экспертизы для сертификации продукции в условиях производства или на территории научного центра. </div>
            </li>
            <li class="advantages__item">
              <a class="choise-link" href="#choise4">У нас Вы получите необходимый документ быстро и без дополнительных затрат</a>
              <div class="advantages__text">У нас Вы получите необходимый документ быстро и без дополнительных затрат. Также наши высококвалифицированные специалисты всегда готовы оказать Вам бесплатные консультационные услуги.</div>
            </li>
          </ul>
          <div class="advantages__img-wrapper">
            <div class="advantages__img" id="choise1" style="background-image:url(<?php bloginfo('template_directory'); ?>/img/advantages/advantage1.jpg)">
            </div>
            <div class="advantages__img" id="choise2" style="background-image:url(<?php bloginfo('template_directory'); ?>/img/advantages/advantage2.jpg)">
            </div>
            <div class="advantages__img" id="choise3" style="background-image:url(<?php bloginfo('template_directory'); ?>/img/advantages/advantage3.jpg)">
            </div>
            <div class="advantages__img" id="choise4" style="background-image:url(<?php bloginfo('template_directory'); ?>/img/advantages/advantage4.jpg)">
            </div>
          </div>
        </div>
        <div class="row row-xs-center">
          <div class="fact col-xs-12 col-md-6 col-xl-3">
            <div class="fact__inner">Мы работаем более&nbsp;
              <strong class="strong">17 лет&ensp;</strong>в сфере сертификации</div>
          </div>
          <div class="fact col-xs-12 col-md-6 col-xl-3">
            <div class="fact__inner">Каждый месяц мы обрабатываем
              <strong class="strong">более 500 заявок&ensp;</strong>
            </div>
          </div>
          <div class="fact col-xs-12 col-md-6 col-xl-3">
            <div class="fact__inner">
              <strong class="strong">Более 90% заказчиков&ensp;</strong>становятся постоянными клиентами</div>
          </div>
          <div class="fact col-xs-12 col-md-6 col-xl-3">
            <div class="fact__inner">Требуется всего&nbsp;
              <strong class="strong">15 минут,&ensp;</strong>чтобы подготовить лучшее предложение для клиента</div>
          </div>
          <div class="fact col-xs-12 col-md-6 col-xl-3">
            <div class="fact__inner">В перечне наших услуг
              <strong class="strong">48&ensp;</strong>различных разрешительных
              <strong class="strong">документов&ensp;</strong>для компаний</div>
          </div>
          <div class="fact col-xs-12 col-md-6 col-xl-3">
            <div class="fact__inner">
              <strong class="strong">0 рублей&nbsp;</strong>стоит отправка документов в любую точку страны.</div>
          </div>
        </div>
        <div class="advantages__btn">
          <span>Остались вопросы?</span>
          <a class="btn" href="#" data-form="question">Обращайтесь</a>
        </div>
      </div>
    </section>
    <!-- Managers-->
    <?php get_managers_table(); ?>
    <!-- Reviews-->
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">Отзывы</h2>
        <?php echo do_shortcode('[mcc-comments perpage=10 show_form=0 count_words=99999]');?>
        <div class="reviews__btn">
          <a class="reviews__link" href="<?php echo home_url('/otzyvy.html') ?>">Посмотреть все</a>
        </div>
      </div>
    </section>
    <!-- News-->
    <section class="news">
      <div class="container">
        <h2 class="news__title">Новости отрасли:</h2>
        <div class="row">

          <?php
          $args = array( 
            'cat' => 4,
            'posts_per_page' => 4,
            'paged' => get_query_var('paged'), 
            'orderby'   => 'date',
            'order'     => 'DESC'
          );
          $the_query = new WP_Query( $args );
          while ( $the_query->have_posts() ) {
            $the_query->the_post(); 
            ?>

            <div class="news-item col-xs-12 col-md-6 col-xl-3">
              <div class="news-item__inner">
                <div class="news-item__bg" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
                <div class="news-item__date"><?php the_time('d.m.Y'); ?></div>
                <h3 class="news-item__title">
                  <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                </h3>
                <div class="news-item__text">
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>

          <?php }
          wp_reset_postdata();
          ?>

        </div>
        <div class="news__btn">
          <a class="news__link" href="<?php echo get_category_link( 4 ) ?>">Посмотреть все</a>
        </div>
      </div>
    </section>
    <!-- Faq-->
    <section class="faq">
      <div class="container">
        <h2 class="faq__title">Вопросы клиентов к специалистам</h2>
        <div class="faq__gallery">
          <?php
          $_question = template_get_mcc_question_random();
          ?>
          <div class="faq__item">
            <div class="faq__question">
              <p><?= $_question['question'];?></p>
              <p><?= $_question['question_name'];?>, <?= $_question['city'];?>, <?= $_question['question_time'];?></p>
            </div>
            <div class="faq__answer"><?= $_question['answer'];?></div>
          </div>

        </div>
        <div class="faq__btn">
          <a class="faq__link" href="<?php echo home_url('/mcc_questions') ?>">Посмотреть все</a>
        </div>
      </div>
    </section>
    <!-- Form question-->
    <section class="form-question">
      <div class="container">
        <div class="form-question__inner">
          <h2 class="form-question__title">Задайте вопрос по сертификации вашего продукта</h2>
          <!-- MCC form question-->
          <?php echo do_shortcode('[mcc-questions-onlyform]'); ?>
        </div>
      </div>
    </section>
    <!-- Map-->
    <section class="map">
      <div class="container">
        <h2 class="map__title">Как нас найти</h2>
        <div class="map-city" itemscope itemtype="http://schema.org/ContactPoint">
          <div class="map-city__column">
            <a class="map-city__name" href="#" itemprop="areaServed"><?php echo define_offices()[0]['city']; ?></a>
            <div class="map-city__address"><?php echo define_offices()[0]['address']; ?></div>
            <div class="map-city__working-hours">с 9:30 до 18:00</div>
          </div>
          <div class="map-city__column">
            <div class="map-city__tel-wrapper">
              <a class="map-city__tel" href="tel:+78124935927" target="_blank" itemprop="telephone"><?php echo define_offices()[0]['tel'][0]; ?></a>
              <a class="map-city__tel" href="tel:+78129512642" target="_blank" itemprop="telephone"><?php echo define_offices()[0]['tel'][1]; ?></a>
            </div>
            <div class="map-city__email-wrapper">
              <a class="map-city__email" href="mailto:otdel@rostest.net" target="_blank" itemprop="email"><?php echo define_offices()[0]['email']; ?></a>
            </div>
          </div>
        </div>
      </div>
      <div class="map__frame" data-lat="<?php echo define_offices()[0]['coords']['lat']; ?>" data-lng="<?php echo define_offices()[0]['coords']['lng']; ?>"></div>
    </section>
  </section>
</main>

<?php
get_footer();
