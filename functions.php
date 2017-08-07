<?php
/**
 * optimatest2017 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package optimatest2017
 */

if ( ! function_exists( 'optimatest2017_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function optimatest2017_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on optimatest2017, use a find and replace
   * to change 'optimatest2017' to the name of your theme in all the template files.
   */
  load_theme_textdomain( 'optimatest2017', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'main-menu' => esc_html__( 'Главное меню', 'optimatest2017' ),
    'footer-main-menu' => esc_html__( 'Футер - главное меню', 'optimatest2017' ),
    'footer-articles-menu' => esc_html__( 'Футер - статьи', 'optimatest2017' ),
    'services-menu-production' => esc_html__( 'Меню услуг по продукции', 'optimatest2017' ),
    'services-menu-docs' => esc_html__( 'Меню услуг по документам', 'optimatest2017' ),
  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  // Set up the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'optimatest2017_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );

  // Add theme support for selective refresh for widgets.
  add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'optimatest2017_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function optimatest2017_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'optimatest2017_content_width', 640 );
}
add_action( 'after_setup_theme', 'optimatest2017_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function optimatest2017_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'optimatest2017' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'optimatest2017' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'optimatest2017_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function optimatest2017_scripts() {
  wp_enqueue_style( 'optimatest2017-style', get_stylesheet_uri() );
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css', array('optimatest2017-style'), null );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '0.1', true );
}
add_action( 'wp_enqueue_scripts', 'optimatest2017_scripts' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function optimatest2017_pingback_header() {
  if ( is_singular() && pings_open() ) {
    echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
  }
}
add_action( 'wp_head', 'optimatest2017_pingback_header' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Search form.
 */
function my_search_form( $form ) {
    $form = '
    <form class="search__form" role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
      <input class="search__input" type="text" placeholder="Введите слово для поиска" value="'.get_search_query().'" name="s" id="s" />
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'my_search_form' );




// managers' block 
function define_managers() {
  $managers_data = array(
    0 => array( 'name' => 'Алена', 'icq' => '406-142-934', 'skype' => 'alyona190', 'image' => 'alena.jpg'),
    1 => array( 'name' => 'Оксана','icq' => '653-468-674', 'skype' => 'kseniyru', 'image' => 'oksana.jpg'),
    2 => array( 'name' => 'Наталья', 'icq' => '656-514-792', 'skype' => 'nayalsev', 'image' => 'natalia.jpg'),
    3 => array( 'name' => 'Ольга', 'icq' => '387-048-616', 'skype' => 'olga_dementjeva', 'image' => 'olga.jpg')
  );
  return $managers_data;
}

function get_managers_table() {
  $put_data = '';
  $managers_data = define_managers();
  // print_r($managers_data);
  $put_data = '<section class="managers" id="managers"><div class="container"><h2 class="managers__title">C вами будут работать</h2><div class="row">'."\n\r";  
  foreach($managers_data as $v) {
    $name = 'name';
    $put_data .= '<div class="managers__item col-xs-6 col-md-3">
      <div class="manager">
        <div class="manager__img">
          <img src="'.get_bloginfo( 'template_url' ).'/img/managers/'.$v['image'].'" alt="Фото '.$v[$name].'">
        </div>        
        <div class="manager__text">
          <div class="manager__name">'.$v[$name].'</div>
          <div class="manager__position">менеджер</div>
          <a class="manager__icq" href="http://www.icq.com/whitepages/cmd.php?uin='.$v['icq'].'&action=message">'.$v['icq'].'</a>
          <a class="manager__skype" href="skype:'.$v['skype'].'">'.$v['skype'].'</a>        
        </div>
      </div>
    </div>'."\n\r";
  }
  $put_data .= '</div></div></section>'."\n\r";
  echo $put_data;
}


// managers' block in sidebar
function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
  $numbers = range($min, $max);
  shuffle($numbers);
  return array_slice($numbers, 0, $quantity);
}

function get_managers_sidebar() {
  $put_data = '';
  $managers_data = define_managers();
  $choose_managers = UniqueRandomNumbersWithinRange(0,3,1);

  if(count($choose_managers)) {
    $put_data = '<div class="manager-section">'."\n\r";
    foreach($choose_managers as $v) {
      $put_data .= '<div class="manager">
        <h3 class="manager__title">Ваш менеджер</h3>
        <div class="manager__img">
          <img src="'.get_bloginfo( 'template_url' ).'/img/managers/'.$managers_data[$v]['image'].'" alt="Фото '.$managers_data[$v][$name].'">
        </div>
        <div class="manager__text">
          <div class="manager__name">'.$managers_data[$v][$name].'</div>
          <div class="manager__position">менеджер</div>
          <a class="manager__icq" href="http://www.icq.com/whitepages/cmd.php?uin='.$managers_data[$v]['icq'].'&action=message">'.$managers_data[$v]['icq'].'</a>
          <a class="manager__skype" href="skype:'.$managers_data[$v]['skype'].'">'.$managers_data[$v]['skype'].'</a>
        </div>
      </div>'."\n\r";
    }
    $put_data .= '<a class="manager-section__link" href="'.home_url('#managers').'">Все менеджеры</a></div>'."\n\r";
  }
  echo $put_data;
}





// offices' block 
function define_offices() {
  $offices_data = array(
      0 => array( 'city' => 'Санкт-Петербург', 'address' => 'ул. Яблочкова, д. 12, лит. Ц., оф. 309', 'tel' => array( 0 => '+7 (812) 409 39 49', 1 => '+7 (921) 986 78 65'), 'email' => 'info@optimatest.ru', 'coords' => array( 'lat' => '59.951094', 'lng' => '30.299075')),
      1 => array( 'city' => 'Москва', 'address' => 'ул. А. Солженицына, д. 11, стр. 1, оф. 5', 'tel' => array( 0 => '+7 (495) 663-22-18', 1 => '+7 (495) 783-29-26'), 'email' => 'info@optimatest.ru', 'coords' => array( 'lat' => '55.743043', 'lng' => '37.657710')),
      2 => array( 'city' => 'Ростов-на-Дону', 'address' => 'ул. Нижнебульварная, д. 6', 'tel' => array( 0 => '+7 (952) 561-01-17'), 'email' => 'info@optimatest.ru', 'coords' => array( 'lat' => '47.217211', 'lng' => '39.722588')),
      3 => array( 'city' => 'Волгоград', 'address' => 'ул. Рокоссовского, д.62', 'tel' => array( 0 => '+7 (8442) 51-66-48'), 'email' => 'info@optimatest.ru', 'coords' => array( 'lat' => '48.730080', 'lng' => '44.525349')),
      4 => array( 'city' => 'Саратов', 'address' => 'ул.Вольская, 91', 'tel' => array( 0 => '+7 (8452) 68-05-74'), 'email' => 'info@optimatest.ru', 'coords' => array( 'lat' => '51.534603', 'lng' => '46.026208')),
      5 => array( 'city' => 'Челябинск', 'address' => 'ул. Российская , д. 110', 'tel' => array( 0 => '+7 (351) 277-90-39'), 'email' => 'info@optimatest.ru', 'coords' => array( 'lat' => '55.170635', 'lng' => '61.415718')),
      6 => array( 'city' => 'Калининград', 'address' => 'площадь Победы, д. 2А', 'tel' => array( 0 => '+7 (401) 220-14-86'), 'email' => 'info@optimatest.ru', 'coords' => array( 'lat' => '54.721196', 'lng' => '20.503141')),
      7 => array( 'city' => 'Омск', 'address' => 'ул. 70 лет Октября, д. 19', 'tel' => array( 0 => '+7 (381) 220-73-60'), 'email' => 'info@optimatest.ru', 'coords' => array( 'lat' => '54.981208', 'lng' => '73.321285')),
      8 => array( 'city' => 'Пермь', 'address' => 'ул. Ленина, д. 92', 'tel' => array( 0 => '+7 (342) 225-01-45'), 'email' => 'info@optimatest.ru', 'coords' => array( 'lat' => '58.005567', 'lng' => '56.207772')),
  );
  return $offices_data;
}

function get_offices_table() {
  $offices_data = define_offices();
  // print_r($offices_data);
  // $put_data = '';
  $put_data = '<ul class="city__dropdown">'."\n\r";  
  foreach($offices_data as $v) {
    if( !empty($v['tel'][1]) ) {
      $tel2 = 'data-tel1="'.$v['tel'][1].'"';
    } else {
      $tel2 = '';
    }

    $put_data .= '<li class="city__item">
      <a class="city__link" href="#" data-email="'.$v['email'].'" data-tel0="'.$v['tel'][0].'" '.$tel2.' data-address="'.$v['address'].'" data-lat="'.$v['coords']['lat'].'" data-lng="'.$v['coords']['lng'].'">'.$v['city'].'</a>
    </li>'."\n\r";
  }
  $put_data .= '</ul>'."\n\r";
  echo $put_data;
}


/* Custom post types */
function banners_register_post_type_init() {
  $labels = array(
    'name' => 'Баннеры',
    'singular_name' => 'Баннер', // админ панель Добавить->Функцию
    'add_new' => 'Добавить баннер',
    'add_new_item' => 'Добавить новый баннер', // заголовок тега <title>
    'edit_item' => 'Редактировать баннер',
    'new_item' => 'Новый баннер',
    'all_items' => 'Все баннеры',
    'view_item' => 'Просмотр баннера на сайте',
    'search_items' => 'Искать баннеры',
    'not_found' =>  'Баннеров не найдено.',
    'not_found_in_trash' => 'В корзине нет баннеров.',
    'menu_name' => 'Баннеры' // ссылка в меню в админке
  );
  $args = array(
    'labels' => $labels,
    'description' => 'Содержит баннеры',
    'public' => true,
    'show_ui' => true, // показывать интерфейс в админке
    'has_archive' => true, 
    'menu_icon' => 'dashicons-groups', // иконка в меню
    'menu_position' => 5, // порядок в меню
    'supports' => array( 'title', 'thumbnail')
  );
  register_post_type('banners', $args);
}
add_action( 'init', 'banners_register_post_type_init' ); // Использовать функцию только внутри хука init


/**
 * Excerpt
 */
function new_excerpt_length($length) {
  return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more) {
  global $post;
  return '... <a href="'. get_permalink($post->ID) . '">Читать далее →</a>';
}

/* */
function template_get_mcc_question_random() {
  $Factory = MCC_System_Factory :: getInstance();
  /* @var $Posts MCC_Actions_WordPress_Posts_Controller */
  $Posts = $Factory->NewObj( 'MCC_Actions_WordPress_Posts_Controller' );

  $questions = mcc_get_questions(999);
  $quest = $questions[ array_rand($questions) ];

  //print_r($questions );

  $Contacts = mcc_get_contacts();
  $ContactsCount = count( $Contacts );
  $branch_i = 0;
  $found = false;
  $ContactsFirst = null;

  for ( $i = 0; $i < $ContactsCount; $i++ ) {
    if ( $Contacts[ $i ][ 'office_id' ] == $quest[ 'office_id' ] ) {
        if ( is_null( $ContactsFirst ) ) {
      $ContactsFirst = $i;
        }

        $branch_i = $i;
        if ( $Contacts[ $i ][ 'city' ] == $quest[ 'city' ] ) {
      $found = true;
      break;
        }
    }
      }

  if ( $found ) {
    $tel = (empty( $Contacts[ $branch_i ][ 'telfax' ] ) ? reset( $Contacts[ $branch_i ][ 'tel' ] ) : reset( $Contacts[ $branch_i ][ 'telfax' ] ) ) ;
    $email = $Contacts[ $branch_i ][ 'email' ];
      }
      else {
    if ( is_null( $ContactsFirst ) ) {
      $tel = (empty( $Contacts[ $branch_i ][ 'telfax' ] ) ? reset( $Contacts[ $branch_i ][ 'tel' ] ) : reset( $Contacts[ $branch_i ][ 'telfax' ] ) );
      $email = $Contacts[ $branch_i ][ 'email' ];
    }
    else {
      $tel = (empty( $Contacts[ $ContactsFirst ][ 'telfax' ] ) ? reset( $Contacts[ $ContactsFirst ][ 'tel' ] ) : reset( $Contacts[ $ContactsFirst ][ 'telfax' ] ) ) ;
      $email = $Contacts[ $ContactsFirst ][ 'email' ];        
    }
      }

  return array(
    'url'=> get_permalink( $Posts->PagesQuestionGetIdWordPressByIdMcc( $quest[ 'id' ] ) ),
    //
    'id'=> $quest['id'],
    'city'=> $quest['city'],
    'question' => $quest['question'],
    'question_name' =>$quest['question_name'] ,
    'question_time' => $quest['question_time'],
    'answer' => $quest['answer'],
    'answer_name' => $quest['answer_name'],
    'office_id' => $quest['office_id'],
    'answer_time' => $quest['answer_time'],
    'lang' => $quest['lang'],
    'seo_header' => $quest['seo_header'],
    //
    'answer_email' => $email,
    'answer_tel' => $tel
  );
}




function inter_admin_meta_box() {
  add_meta_box( 'inter-box-id', 'Ссылка на страницу', 'inter_admin_meta_box_callback', ['banners'], 'normal', 'default' );
}

function inter_admin_meta_box_callback() {
  global $post;
  // print_r( $post );
  // echo 'Ссылка на страницу:';

  $list_argc = [
    'posts_per_page' => 999,
    'post_type' => ['page', 'post']//$post->post_type
  ];
  $list = get_posts( $list_argc );
  $checked = get_option( 'inter_other_docs' . $post->ID, [] );
  // print_r( $checked );
  ?>
  <!--<form method="POST">-->
  <!--<input type="submit" />-->
  <ul>
    <?php
    foreach( $list as $_list ) {
      /* @var $_list WP_Post */
      ?>
      <li style="float: left;width: 33%;margin-top: 5px;">
        <input id="inter_other_docs<?php echo $_list->ID; ?>" name="inter_other_docs[]" type="radio" value="<?php echo $_list->ID; ?>" <?php echo in_array( $_list->ID, $checked ) ? 'checked="checked"' : ''; ?> />
        <label for="inter_other_docs<?php echo $_list->ID; ?>"><?php echo $_list->post_title; ?></label>
      </li>
    <?php } ?>
  </ul>
  <br style="clear:both;" />
  <!--</form>-->
  <?php
}


function inter_admin_meta_box_save() {
  global $post;
  // print_r( $_POST );
  // print_r( $post );
  if( isset( $_POST[ 'inter_other_docs' ] ) ) {
    update_option( 'inter_other_docs' . $post->ID, $_POST[ 'inter_other_docs' ], false );
  }
}

if( is_admin() ) {
  add_action( 'add_meta_boxes', 'inter_admin_meta_box' );
  add_action( 'save_post', 'inter_admin_meta_box_save' );
}