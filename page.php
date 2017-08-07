<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
          <?php while ( have_posts() ) : the_post(); ?>
            <section class="content" itemscope="itemscope" itemtype="http://schema.org/Article">
              <div class="container">
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
            </section>
          <?php endwhile; ?>
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