<?php
/**
 * The template for displaying all single posts of 'news' category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package optimatest2017
 */

get_header(); ?>

<main>
  <section class="page page--single-news">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-xl-9">
          <!-- Content-->
          <section class="content" itemscope="itemscope" itemtype="http://schema.org/Article">
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="content__article">
                <div class="content__date" itemprop="datePublished"><?php the_time('d.m.Y'); ?></div>
                <h1 class="content__title" itemprop="headline"><?php the_title(); ?></h1>
                <?php if( has_post_thumbnail() ) { ?>
                  <div class="content__img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                <?php } ?>
                <div class="content__text" itemprop="articleBody">
                  <?php the_content(); ?>
                </div>
              </div>
            <?php endwhile; ?>
            <!-- Other news-->
            <section class="other-news">
              <h2 class="other-news__title">Другие новости по теме</h2>
              <div class="other-news__gallery">

                <?php
                  global $post;
                  $args = array(
                    'numberposts' => 15,
                    'post_type' => 'post',
                    'cat' => 4,
                    'orderby' => 'date',
                    'order'   => 'ASC',                    
                    'paged' => get_query_var('paged'),
                    'exclude'        => $GLOBALS['post']->ID,
                  );
                  $myposts = get_posts( $args );
                  foreach( $myposts as $post ){ setup_postdata($post);
                  ?> 

                    <div class="other-news-item">
                      <div class="other-news-item__inner">
                        <?php if( has_post_thumbnail() ) { ?>
                          <div class="other-news-item__img">
                            <?php the_post_thumbnail(); ?>
                          </div>
                        <?php } ?>
                        <div class="other-news-item__text-wrapper">
                          <div class="other-news-item__date"><?php the_time('d.m.Y'); ?></div>
                          <h3 class="other-news-item__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          </h3>
                          <div class="other-news-item__text">
                            <?php the_excerpt(); ?>
                          </div>
                        </div>
                      </div>
                    </div>

                <?php
                }
                wp_reset_postdata();
                ?>

              </div>
            </section>
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
