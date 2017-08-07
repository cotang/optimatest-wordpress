<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package optimatest2017
 */

get_header(); ?>

<main>
  <section class="page">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-xl-9">
          <!-- Content -->
          <section class="content">
            <div class="container">
              <h1 class="content__title"><?php the_archive_title() ?></h1>
              <div class="row">
                <?php
                $args = array( 
                  'post_type' => $post,                  
                  'posts_per_page' => 6,
                  'paged' => get_query_var('paged'), 
                  'orderby'   => 'date',
                  'order'     => 'ASC'
                );
                query_posts( $args );

                // if( have_posts() ){ 
                  while ( have_posts() ) : the_post(); ?>

                    <div class="article">
                      <div class="article__date"><?php the_time('d.m.Y'); ?></div>
                      <h3 class="article__title">
                        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                      </h3>
                      <div class="article__text">
                        <?php the_excerpt(); ?>
                      </div>
                    </div>

                  <?php endwhile;
                  wp_reset_query();
                // }
                ?>

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
