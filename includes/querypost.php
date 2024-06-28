<?php 

function list_Post($quantity = -1) {
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => $quantity,
  );
  $post_query = new WP_Query($args);

  if ($post_query->have_posts()) {
    while ($post_query->have_posts()) {
      $post_query->the_post(); ?>
      
      <article class="section-blog__content-box">
        <div class="section-blog__content-box-img">

          <?php the_category(); ?>
          
          <a href="<?php echo esc_url(get_permalink()); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php endif; ?>
          </a>
        </div>

        <a href="<?php echo esc_url(get_permalink()); ?>" class="section-blog__content-box-link">
          <h3 class="section-blog__content-box-title">
            <?php the_title(); ?>
          </h3>
        </a>

        <p class="section-blog__content-box-text">
          <?php echo esc_html(excerpt('22')); ?>
        </p>

        <a href="<?php echo esc_url(get_permalink()); ?>" class="button button--primary">
          <span class="section-blog__content-box-btn-text"><?php esc_html_e('Leer más', 'your-text-domain'); ?></span>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </a>
      </article>

    <?php }
    wp_reset_postdata();
  } else {
    echo '<p>' . esc_html__('No posts found', 'your-text-domain') . '</p>';
  }
}

function render_banner_cta($title = '¿Tu Empresa Está Segura?', $text = 'No dejes que las amenazas digitales te tomen por sorpresa. Nuestro equipo puede ayudarte a proteger tu infraestructura con soluciones personalizadas. ¡Descubre cómo hoy mismo!', $additional_class = '') {
  $additional_class = esc_attr($additional_class);
  ?>
  <section class="banner-cta <?php echo $additional_class; ?>">
      <div class="main-container">
          <div class="banner-cta__content">
              <div class="banner-cta__content-img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/about1.png" alt="<?php esc_attr_e('phone', 'your-text-domain'); ?>">
              </div>
              <div class="banner-cta__content-texts">
                  <h2 class="banner-cta__content-title"><?php echo wp_kses_post($title); ?></h2>
                  <p class="banner-cta__content-text"><?php echo wp_kses_post($text); ?></p>
                  <a class="button button--cta-outline button--icon contact" href="#contacto"><?php esc_html_e('Solicita una Consulta Gratuita', 'your-text-domain'); ?></a>
              </div>
          </div>
      </div>
  </section>
  <?php
}
