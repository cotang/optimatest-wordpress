<?php
/**
 * Template Name: page services branches
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package optimatest2017
 */

get_header(); ?>

<main>
  <section class="page page--services page--services-branches">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-xl-9">
          <!-- Content services-->
          <?php while ( have_posts() ) : the_post(); ?>
            <section class="content-services">
              <div class="container">
                <h1 class="content-services__title"><?php the_title(); ?></h1>
                <div class="content-services__text">
                  <?php the_content(); ?>
                </div>
              </div>
            </section>
          <?php endwhile; ?>
          <!-- Services branches-->
          <section class="services services--branches">
            <h2 class="services__title">По типу вашей отрасли:</h2>
            <?php wp_nav_menu(array(
              'container' => false,
              'theme_location'  => 'services-menu-production',
              'menu_class' => 'services__list',
              'menu_id' => 'services__list'
            )); ?>
          </section>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
    <!-- Procedure-->
    <?php get_template_part( 'template-parts/procedure' ); ?>
    <!-- Reglaments-->
    <?php get_template_part( 'template-parts/reglaments' ); ?>
    <!-- Clients-->
    <?php get_template_part( 'template-parts/clients' ); ?>
  </section>
</main>



<?php
get_footer();
