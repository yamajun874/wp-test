<?php get_header(); ?>

<div class="single-background">
  <div class="single-content">
    <?php if (have_posts()) : the_post(); ?>
      <section class="single-header">
        <?php if (has_category()) : ?>
          <p class="single-category">
            <?php echo get_the_category_list(' '); ?>
          </p>
        <?php endif; ?>
        <h1 class="single-ttl"><?php the_title(); ?></h1>
        <p class="single-date"><?php echo get_the_date('Y-m-d'); ?></p>
      </section>
      <section class="single-pics">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
        <?php endif; ?>
      </section>
      <section class="main-text">
        <?php the_content(); ?>
        </p>
      </section>
    <?php endif; ?>
  </div>
</div>


<?php get_footer(); ?>