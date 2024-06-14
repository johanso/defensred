<?php

  // includes
  require get_template_directory() . '/includes/shortcodes.php';
  require get_template_directory() . '/includes/querypost.php';

  // add scripts and styles
  function travels_styles() {

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');
    wp_enqueue_style('icons', get_template_directory_uri() . '/icons/style.css', array(), '1.0.0', 'all');

    wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);

  }
  add_action('wp_enqueue_scripts', 'travels_styles');


  // add menus  
  function travels_menus() {
    register_nav_menus(
      array(
        'main-menu' => __('Main Menu'),
        'footer-menu' => __('Footer Menu'),
      )
    );
  }
  add_action('init', 'travels_menus');


  // add theme support
  function travels_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme', 'travels_theme_support');

  // add widgets
  function travels_widgets() {
    register_sidebar(
      array(
        'name' => 'Sidebar post',
        'id' => 'sidebar-post',
        'description' => 'Standard Sidebar',
        'before_widget' => '<section id="%1$s" class="sidebar__widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
      )
    );

    register_sidebar(
      array(
        'name' => 'Sidebar page',
        'id' => 'sidebar-page',
        'description' => 'Standard Sidebar',
        'before_widget' => '<section id="%1$s" class="sidebar__widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
      )
    );
  }
  add_action('widgets_init', 'travels_widgets');
  
  //Limitar con la funcion get_the_excerpt
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

//Limitar con la funcion get_the_content
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
  array_pop($content);
  $content = implode(" ",$content).'...';
  } else {
  $content = implode(" ",$content);
  }
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

add_filter( 'big_image_size_threshold', '__return_false' );


// WordPress Preloader by Redpishi.com

add_action( 'init', 'Redpishi_Preloader' );
function Redpishi_Preloader() { if(!is_admin() &&  $GLOBALS["pagenow"] !== "wp-login.php" ) { 
	
$delay = 0.25;	//seconds
$loader = 'https://defensred.com/wp-content/themes/mytheme/assets/logo.svg';
	
echo '<div class="preloader"><img src="'.$loader.'" alt="Preloader"><div class="preloader-loader"></div></div>
 <style>
.preloader {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #0e1625;
  z-index: 100000;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 1rem;
}
.preloader-loader {
  width:12px;
  height:12px;
  background: #FFFFFF;
  border-radius: 50%;
  box-shadow: 20px 0 #FFFFFF22,-20px 0 #FFFFFF;
  animation:d5 1s infinite linear alternate;
}
.preloader img {
  height: 100px;
  filter: invert(1);
}
@keyframes d5 {
  0%  { box-shadow: 20px 0 #FFFFFF,-20px 0 #FFFFFF22;background: #FFFFFF }
  33% { box-shadow: 20px 0 #FFFFFF,-20px 0 #FFFFFF22;background: #FFFFFF22 }
  66% { box-shadow: 20px 0 #FFFFFF22,-20px 0 #FFFFFF;background: #FFFFFF22 }
}
</style>
<script>
document.body.style.overflow = "hidden";
document.addEventListener("DOMContentLoaded", () => setTimeout( function() { document.querySelector("div.Preloader").remove(); document.body.style.overflow = "visible"; } , '.$delay.' * 1000));
</script>
'; }}