    <section class="docs">
      <div class="container">
        <h2 class="docs__title">У нас оформляют</h2>
        <div class="row">


          <?php
          global $post;
          $args = array(
            'post_type' => 'page',
            'numberposts' => 6,
            'include'     => array(1187, 25313, 1150, 1857, 1131, 24),
          );
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) {
            setup_postdata( $post );
            ?>

            <div class="doc-item col-xs-6 col-md-4 col-xl-2">
              <div class="doc-item__wrapper">
                <?php the_post_thumbnail('post-thumbnail', array('class'=>'doc-item__img')) ?>
                <div class="doc-item__text-wrapper">
                  <h3 class="doc-item__title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                  <div class="doc-item__time">Оформление от 2 дней</div>
                  <div class="doc-item__links">
                    <a class="doc-item__link" href="<?php the_permalink(); ?>">Зачем нужен?</a>
                    <a class="doc-item__link" href="<?php the_permalink(); ?>">Что предоставить?</a>
                    <a class="btn" href="#" data-form="application">Рассчитать стоимость</a>
                  </div>
                </div>
              </div>
            </div>

          <?php
          }
          wp_reset_postdata();
          ?>

          <div class="col-xs-12">
            <a class="docs__link" href="<?php echo home_url('/cert.html') ?>">Смотреть все</a>
          </div>
        </div>
      </div>
    </section>