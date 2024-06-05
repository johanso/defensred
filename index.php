<?php get_header(); ?>


<?php if ( is_home() ) { ?>
  <section class="blog__header">
    <h2 class="blog__title">Noticias y Consejos</h2>
    <p class="blog__subtitle">Explora las últimas noticias y actualizaciones para mantener tu empresa segura</p>
  </section>
<?php } ?>

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