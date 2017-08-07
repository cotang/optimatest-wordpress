<?php
/**
 * The template for displaying category "news"
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package optimatest2017
 */

get_header(); ?>

<main>
  <section class="page page--info">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-xl-9">
          <!-- Glossary-->
          <section class="glossary">
            <div class="glossary__text">Воспользуйтесь живым поиском по статьям
              <form role="search" method="get" action="<?php echo home_url( '/' ) ?>" >
                <input type="text" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s" />
              </form>
            </div>
            <ul class="glossary__list">

              <?php
              $args = array( 
                'cat' => 7,
                'posts_per_page' => 8,
                'paged' => get_query_var('paged'), 
                'orderby'   => 'date',
                'order'     => 'ASC'
              );
              $the_query = new WP_Query( $args );
              while ( $the_query->have_posts() ) {
                $the_query->the_post(); 
                ?>

                <li class="glossary__item">
                  <h3 class="glossary__title">
                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                  </h3>
                  <div class="glossary__text">
                    <?php the_excerpt(); ?>
                  </div>
                </li>

              <?php }
              wp_reset_postdata();
              ?>

            </ul>

            <div class="page-pagination">
              <?php 
                the_posts_pagination( array(
                  'prev_text'    => __('←'),
                  'next_text'    => __('→'),
                  'end_size'     => 0,
                  'mid_size' => 2
                ) ); 
              ?>
            </div> 

          </section>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
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
    <!-- Clients-->
    <?php get_template_part( 'template-parts/clients' ); ?>
  </section>
</main>

<?php
get_footer();
