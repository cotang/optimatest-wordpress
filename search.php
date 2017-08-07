<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package optimatest2017
 */

get_header(); ?>

<main>
  <section class="page page--single">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-xl-9">
          <!-- Content-->          
          <section class="content">
            <div class="container">
              <h1 class="content__title">Результаты поиска:</h1>

              <ol class="content__list-search">
                <?php while ( have_posts() ) : the_post(); ?>
                  <li class="content-search">
                    <h2 class="content-search__title"><?php the_title(); ?></h2>
                    <div class="content-search__text">
                      <?php the_excerpt(); ?>
                    </div>
                  </li>
                <?php endwhile; ?>                
              </ol>

            </div>
          </section>          
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
    <!-- Docs-->
    <?php get_template_part( 'template-parts/docs' ); ?>
    <!-- Procedure-->
    <?php get_template_part( 'template-parts/procedure' ); ?>
    <!-- Clients-->
    <?php get_template_part( 'template-parts/clients' ); ?>
  </section>
</main>

<?php
get_footer();
