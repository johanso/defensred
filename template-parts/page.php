<?php while( have_posts() ) : the_post(); ?>  

  <div class="post__container">

    <section class="post__header">
      <?php the_title('<h1 class="post__title">', '</h1>'); ?>
    </section>
    
    <div class="container__inner">
      <?php the_content(); ?>
    </div>
  </div> 

  <?php endwhile; ?>


