<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

                <?php 
                $categories = get_the_category($post_id);
                // print_r(get_the_category($post_id));
                if($categories){
                  echo '<div class="content__back"><h3>Вернуться к категории:</h3>';
                  foreach($categories as $category) {
                    echo '<div style="margin-bottom: 10px;"><a class="btn" href="'. get_category_link($category->term_id) . '">' . $category->cat_name . '</a></div>';
                  }
                  echo '</div>';
                } ?>                  
                
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
