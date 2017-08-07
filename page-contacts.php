<?php
/**
 * Template Name: Page contacts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package optimatest2017
 */

get_header(); ?>

<main>
  <section class="page page--contacts">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-xl-3">
          <!-- Contacts-->
          <section class="contacts">
            <?php $offices_data = define_offices();
            $spb_lat = $offices_data[0]['coords']['lat'];
            $spb_lng = $offices_data[0]['coords']['lng'];

            $put_data = '<ul class="contacts__list">'."\n\r";  
            foreach($offices_data as $v) {            
              if( !empty($v['tel'][1]) ) {
                $tel2 = '<a class="contacts__tel" href="tel:'.$v['tel'][1].'" target="_blank" itemprop="telephone">'.$v['tel'][1].'</a>';
              } else {
                $tel2 = '';
              }

              $put_data .= 
              '<li class="contacts__item"'.$classActive.'>
                <h3 class="contacts__name" data-lat="'.$v['coords']['lat'].'" data-lng="'.$v['coords']['lng'].'">'.$v['city'].'</h3>
                <div class="contacts__address">'.$v['address'].'</div>
                <div class="contacts__working-hours">с 9:30 до 18:00</div>
                <a class="contacts__tel" href="tel:'.$v['tel'][0].'" target="_blank" itemprop="telephone">'.$v['tel'][0].'</a>' .$tel2.'
                <a class="contacts__email" href="mailto:'.$v['email'].'" target="_blank" itemprop="email">'.$v['email'].'</a>
              </li>'."\n\r";
            }
            $put_data .= '</ul>'."\n\r";
            echo $put_data;
            ?>

          </section>
        </div>
        <div class="col-xs-12 col-xl-6">
          <!-- Contacts-map-->
          <div class="contacts-map" id="contacts-map" data-lat="<?php echo $spb_lat ?>" data-lng="<?php echo $spb_lng ?>"></div>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
    <!-- Clients-->
    <?php get_template_part( 'template-parts/clients' ); ?>
  </section>
</main>

<?php
get_footer();
