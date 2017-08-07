<?php
/**
 * The template for displaying any category
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
          <!-- Content -->
          <section class="content">
            <div class="container">
              <h1 class="content__title"><?php single_cat_title(); ?></h1>

              <ul class="content__list">
                <?php
                $args = array( 
                  'cat' => $cat,
                  // 'posts_per_page' => 8,
                  // 'paged' => get_query_var('paged'), 
                  'orderby'   => 'date',
                  'order'     => 'ASC'
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) {
                  $the_query->the_post(); 
                  ?>

                  <li class="content__item">
                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                  </li>
                <?php }
                wp_reset_postdata();
                ?>

              </ul>

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
