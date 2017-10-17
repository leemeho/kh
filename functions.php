<?php

  function khabarera_setup()
  {
    add_theme_support( 'post-thumbnails' );

	add_image_size('k-logo',277,50, true);

    add_image_size('k-first',562,389, true);
    add_image_size('k-second_third',273,188, true);
    add_image_size('k-fourth',562,186, true);

    add_image_size('k-news',100,70, true);
    add_image_size('k-article',66,66, true);

    add_image_size('k-mobile_first',360,175, true);
    add_image_size('k-mobile_second',172,96, true);

    add_image_size('k-vei_first',360,243, true);
    add_image_size('k-vei_second',165,97, true);

    add_image_size('k-se_first',360,175, true);
    add_image_size('k-se_second',100,70, true);

    add_image_size('k-single-news',750,500, true);
    add_image_size('k-categorys',230,153, true);
	
	add_image_size('k-slider',845,400, true);
	add_image_size('k-ent-first',274,188, true);
	add_image_size('k-ent-second',562,391, true);

  }
  add_action('after_setup_theme','khabarera_setup');

  function khabarera_styles()
  {
    //adding stylesheets
    wp_register_style('opensans' ,'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700,900', array(),'1.0.0');
    wp_register_style('mukta' ,'https://fonts.googleapis.com/css?family=Ek+Mukta:300,400,500,600,700,800', array(),'1.0.0');
    wp_register_style('normalize',get_template_directory_uri() . '/css/normalize.css',array(),'7.0.0');
    wp_register_style('fontawesome',get_template_directory_uri() . '/css/font-awesome.css',array(),'4.7.0');
    wp_register_style('responsive',get_template_directory_uri() . '/css/responsive.css', array() ,'1.0');
    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css', array() ,'3.7.0');
    wp_register_style('custom',get_template_directory_uri() . '/css/custom.css', array() ,'1.0.0');
    wp_register_style('style',get_template_directory_uri() . '/style.css', array('normalize') ,'1.0');

    //Enqueue the style
    wp_enqueue_style('normalize');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('opensans');
 	wp_enqueue_style('mukta');
    wp_enqueue_style('responsive');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');
    wp_enqueue_style('style');

    wp_register_script('script', get_template_directory_uri(). '/js/jquery-3.2.1.min.js', array('jquery'),'1.0.0',true);
    wp_register_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array(),'1.0.0',true);
    wp_register_script('sticky', get_template_directory_uri(). '/js/jquery.sticky.min.js', array(),'1.0.0',true);
    wp_register_script('hoverIntent', get_template_directory_uri(). '/js/jquery.hoverIntent.min.js', array(),'1.0.0',true);
    wp_register_script('marquee', get_template_directory_uri(). '/js/jquery.marquee.min.js', array(),'1.0.0',true);
    wp_register_script('validate', get_template_directory_uri(). '/js/jquery.validate.min.js', array(),'1.0.0',true);
    wp_register_script('isotope', get_template_directory_uri(). '/js/isotope.min.js', array(),'1.0.0',true);
    wp_register_script('resizesensor', get_template_directory_uri(). '/js/resizesensor.min.js', array(),'1.0.0',true);
    wp_register_script('sidebar', get_template_directory_uri(). '/js/theia-sticky-sidebar.min.js', array(),'1.0.0',true);
    wp_register_script('zoom', get_template_directory_uri(). '/js/jquery.zoom.min.js', array(),'1.0.0',true);
    wp_register_script('barrating', get_template_directory_uri(). '/js/jquery.barrating.min.js', array(),'1.0.0',true);
    wp_register_script('countdown', get_template_directory_uri(). '/js/jquery.countdown.min.js', array(),'1.0.0',true);
    wp_register_script('retina', get_template_directory_uri(). '/js/retina.min.js', array(),'1.0.0',true);
    wp_register_script('main', get_template_directory_uri(). '/js/main.js', array(),'1.0.0',true);


    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('sticky');
    wp_enqueue_script('hoverIntent');
    wp_enqueue_script('marquee');
    wp_enqueue_script('validate');
    wp_enqueue_script('isotope');
    wp_enqueue_script('resizesensor');
    wp_enqueue_script('zoom');
    wp_enqueue_script('barrating');
    wp_enqueue_script('countdown');
    wp_enqueue_script('retina');
    wp_enqueue_script('main');
    wp_enqueue_script('script');
  }
  add_action('wp_enqueue_scripts','khabarera_styles');

  //Add Menu
  function khabarer_menus()
  {
    register_nav_menus(array(
      'header-menu' => __('Header Menu','khabarera'),
      'social-menu' => __('Social Menu','khabarera'),
      'footer-menu' => __('Footer Menu','khabarera')
    ));
  }

  add_action('init','khabarer_menus');

  //Widget
  function khabarera_widget(){
    register_sidebar(array(
      'name'=>'Sidebar',
      'id'=>'sidebar1'
    ));
	register_sidebar( array(
		'name'          => esc_html__( 'Home Middle Section - Right Sidebar', 'khabarera' ),
		'id'            => 'khabarera-fslider',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
  }
  add_action( 'widgets_init', 'khabarera_widget');

//Pagination
function bit_pat() {

global $wp_query;

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
        'prev_next'       => True,
        'prev_text'       => __('&larr;','khabarera'),
        'next_text'       => __('&rarr;','khabarera'),
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
       echo '</ul>';
        }
}

//category display
function cat(){
  $category = get_the_category();
  if(null !== $category){
    $firstCategory = $category[0]->cat_name; echo $firstCategory;
  }else{
    $firstCategory = $category[1]->cat_name; echo $firstCategory;
  }
}

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );


function khabarera_time() { 
    $post_date = get_the_time('U');
    $delta = time() - $post_date;
    if ( $delta < 60 ) {
        echo 'Just Now';
    }
    elseif ($delta > 60 && $delta < 120){
        echo 'About a min ago';
    }
    elseif ($delta > 120 && $delta < (60*60)){
        echo strval(round(($delta/60),0)), ' min ago';
    }
    elseif ($delta > (60*60) && $delta < (120*60)){
      echo strval(round(($delta/3600),0)), ' hour ago';
    }
    elseif ($delta > (120*60) && $delta < (24*60*60)){
        echo strval(round(($delta/3600),0)), ' hours ago';
    }
    else {
        echo the_time('j\<\s\u\p\>S\<\/\s\u\p\> M y ');
    }
}

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


?>
