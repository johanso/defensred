<?php get_header(); ?>

  <section class="blog__header">
    <?php 
      $category = get_queried_object(); 
      echo '<h2 class="blog__title">' . $category->name . '</h2>';
      echo '<p class="blog__subtitle">' . $category->description . '</p>';
    ?>
  </section>

  <div class="main-container blog">
    <div class="section-blog__content-boxes">
      <?php list_post() ?>
    </div>
  </div>

  <?php render_banner_cta(
    '¿Listo para <span>Fortalecer tu Seguridad?</span>', 
    'Contáctanos hoy para una consulta gratuita y descubre cómo podemos proteger tu empresa.',
    'banner-cta--last'); 
  ?>

<?php get_footer(); ?>