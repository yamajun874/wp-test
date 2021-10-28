<?php get_header(); ?>

<section class="first-view--color">
  <h1 class="first-view__ttl"><?php single_cat_title(); ?></h1>
</section>
<section class="content">
  <div class="post">
    <div class="post-card">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
              <?php endif; ?>
            
            <div class="post-card__comment">
              <h2 class="post-card__message">
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                  $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                  echo $title . '...';
                } else {
                  echo $post->post_title;
                }
                ?>
              </h2>
              <p class="post-card__data"><?php echo get_the_date('Y-m-d'); ?></p>
            </div>
          </a>
        <?php endwhile; ?>
      <?php else : ?>
        <p>投稿が見つかりません</p>
      <?php endif; ?>
    </div>
  </div>
  <?php get_sidebar(); ?>
</section>
</div>
<?php get_footer(); ?>