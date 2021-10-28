<?php get_header(); ?>

<div class="single-background">

  <?php if (have_posts()) : the_post(); ?>
    <div class="single-content">
      <section class="single-header">
        <?php if (has_category()) : ?>
          <a href="<?php echo get_category_link(''); ?>" class="single-category">
            <?php echo get_the_category_list(' '); ?>
          </a>
        <?php endif; ?>
        <h1 class="single-ttl"><?php the_title(); ?></h1>
        <p class="single-date"><?php get_the_date('Y-m-d'); ?></p>
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

    </div>
  <?php endif; ?>
</div>


<?php get_footer(); ?>