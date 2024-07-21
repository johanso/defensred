<?php
/**
* Template Name: Page service
*
*/
?>

<?php get_header(); ?>

  <section class="post__header">
    <?php the_title('<h1 class="post__title">', '</h1>'); ?>
  </section>

  <div class="main-container page service">
    <?php while( have_posts() ) : the_post(); ?>  
      <div class="post__container">
        
        <div class="container__inner">
          <?php the_content(); ?>
        </div>
      </div> 
    <?php endwhile; ?>

    <aside class="sidebar">
      <?php dynamic_sidebar('sidebar-page'); ?>
    </aside>

  </div>

  <?php render_banner_cta(
    '¿Listo para <span>Fortalecer tu Seguridad?</span>', 
    'Contáctanos hoy para una consulta gratuita y descubre cómo podemos proteger tu empresa.',
    'banner-cta--last'); 
  ?>

<?php get_footer(); ?>
