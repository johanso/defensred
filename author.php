<?php get_header(); ?>


<div class="main-container blog author">

  <?php get_template_part('template-parts/post-author'); ?>

  <div class="section-blog__content-boxes">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

    <?php endwhile; endif; ?>
  </div>

</div>

  <?php render_banner_cta(
    '¿Listo para <span>Fortalecer tu Seguridad?</span>', 
    'Contáctanos hoy para una consulta gratuita y descubre cómo podemos proteger tu empresa.',
    'banner-cta--last'); 
  ?>

<?php get_footer(); ?>