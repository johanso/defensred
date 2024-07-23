<?php

// includes
require get_template_directory() . '/includes/shortcodes.php';
require get_template_directory() . '/includes/querypost.php';

// add scripts and styles
function travels_styles()
{
  wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');
  wp_enqueue_style('icons', get_template_directory_uri() . '/icons/style.css', array(), '1.0.0', 'all');
  wp_enqueue_style('flickity-styles', get_template_directory_uri() . '/styles/flickity.css', array(), '8.0.1', 'all');	

  wp_enqueue_script('flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js', '' ,'2.3.0', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'travels_styles');


// add menus  
function travels_menus()
{
  register_nav_menus(
    array(
      'main-menu' => __('Main Menu'),
      'footer-menu' => __('Footer Menu'),
    )
  );
}
add_action('init', 'travels_menus');


// add theme support
function travels_theme_support()
{
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'travels_theme_support');

// add widgets
function travels_widgets()
{
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
function excerpt($limit)
{
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt) >= $limit) {
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . '...';
  } else {
    $excerpt = implode(" ", $excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
  return $excerpt;
}

//Limitar con la funcion get_the_content
function content($limit)
{
  $content = explode(' ', get_the_content(), $limit);
  if (count($content) >= $limit) {
    array_pop($content);
    $content = implode(" ", $content) . '...';
  } else {
    $content = implode(" ", $content);
  }
  $content = preg_replace('/[.+]/', '', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

add_filter('big_image_size_threshold', '__return_false');


function expose_acf_fields_in_rest($response, $post, $request)
{
  if (function_exists('get_fields')) {
    $acf_fields = get_fields($post->ID);
    if ($acf_fields) {
      $response->data['acf'] = $acf_fields;
    }
  }
  return $response;
}

add_filter('rest_prepare_firewall', 'expose_acf_fields_in_rest', 10, 3);

function add_taxonomy_to_rest()
{
  // Registrar la taxonomía 'marca' en la API REST
  register_rest_field('firewall', 'marca', array(
    'get_callback' => function ($object) {
      $terms = get_the_terms($object['id'], 'marca');
      if (!empty($terms)) {
        return array_map(function ($term) {
          return array(
            'id' => $term->term_id,
            'name' => $term->name,
            'slug' => $term->slug,
          );
        }, $terms);
      }
      return null;
    },
    'update_callback' => null,
    'schema' => null,
  ));
}
add_action('rest_api_init', 'add_taxonomy_to_rest');

function add_featured_image_url_to_rest($response, $post, $request)
{
  // Verificar si el post tiene una imagen destacada
  if (has_post_thumbnail($post->ID)) {
    // Obtener la URL de la imagen destacada en el tamaño deseado (por ejemplo, 'thumbnail')
    $featured_image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');
  } else {
    $featured_image_url = null;
  }
  // Añadir la URL de la imagen destacada a la respuesta de la API REST
  $response->data['featured_image_url'] = $featured_image_url;
  return $response;
}

// Añadir el filtro para incluir la URL de la imagen destacada en la API REST
add_filter('rest_prepare_firewall', 'add_featured_image_url_to_rest', 10, 3);

function enqueue_bootstrap_select_assets()
{
  if (is_page(380)) {
    if (!wp_script_is('jquery', 'enqueued')) {
      wp_enqueue_script('jquery');
    }
	  
	  wp_enqueue_style('bootstrap-select-css', get_template_directory_uri() . '/styles/bootstrap-select.min.css', array(), '1.13.18', 'all');	
		wp_enqueue_script('bootstrap-select-js', get_template_directory_uri() . '/js/bootstrap-select.min.js', array('jquery'), '1.13.18', true);
	  
	  
	  // Encolar el CSS de Bootstrap (opcional)
    if (!wp_style_is('bootstrap-css', 'enqueued')) {
      wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2');
    }

    // Encolar el JavaScript de Bootstrap (opcional)
    if (!wp_script_is('bootstrap-js', 'enqueued')) {
      wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), '4.5.2', true);
    }
	      
  }
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_select_assets');