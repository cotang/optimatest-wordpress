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
  <section class="page page--news">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-xl-9">
          <!-- Content news-->
          <section class="content-news">
            <div class="container">
              <h1 class="content-news__title"><?php single_cat_title(); ?></h1>
              <div class="row">

                <?php
                $args = array( 
                  'cat' => 4,
                  'posts_per_page' => 6,
                  'paged' => get_query_var('paged'), 
                  'orderby'   => 'date',
                  'order'     => 'DESC'
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) {
                  $the_query->the_post(); 
                  ?>

                  <div class="news-item col-xs-12 col-md-6 col-xl-4">
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

                <div class="col-xs-12">
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
                </div>
                
              </div>
            </div>
          </section>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
    <!-- Docs-->
    <?php get_template_part( 'template-parts/docs' ); ?>
    <!-- Clients-->
    <?php get_template_part( 'template-parts/clients' ); ?>
  </section>
</main>

<?php
get_footer();
