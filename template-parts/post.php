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
          <?php the_author_posts_link(); ?>
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

      <div class="post__author">

        <div class="post__author-info">

        <div class="post__author-image-container">
          <img class="post__author-image" src="<?php echo get_avatar_url(get_the_author_meta('ID')) ?>" >
          <span class="post__author-box">Autor</span>
        </div>

          <div class="post__author-name" itemprop="author">
            
            <?php the_author_posts_link(); ?>

            <p class="post__author-bio">
              <?php the_author_meta('description'); ?>
              
              <span class="post__author-social">
                <?php if ( get_the_author_meta('url') ) : ?>
                  <a class="post__author-link" href="<?php the_author_meta('url'); ?>" target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                    </svg>
                  </a>
                <?php endif; ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg>
              </span>
            </p>
          </div>
        </div>


      </div>

      <?php if ( comments_open() || get_comments_number() ) : ?>
        <?php comments_template(); ?>
      <?php endif; ?>
    </div>
  </div> 

  <?php endwhile; ?>


