<?php while( have_posts() ) : the_post(); ?>  

  <div class="post__container">

    <section class="post__header">
      <div class="post__breadcrumb">
        <?php get_template_part('template-parts/breadcrumb'); ?>
      </div>

      <?php the_title('<h1 class="post__title">', '</h1>'); ?>

      <div class="post__metas">
        <div class="author">
          <img src="<?php echo get_avatar_url(get_the_author_meta('ID')) ?>" alt="Author: <?php echo get_the_author_meta('display_name') ?>">
          <?php echo get_the_author_meta('display_name') ?>
        </div>
        /
        <div class="date">
          <?php the_time('F j, Y') ?>
        </div>
      </div>
    </section>
    
    <div class="container__inner">

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="post__image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>

      <?php the_content(); ?>

      <?php if ( comments_open() || get_comments_number() ) : ?>
        <?php comments_template(); ?>
      <?php endif; ?>
    </div>
  </div> 

  <?php endwhile; ?>


