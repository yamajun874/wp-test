<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="background-image">
    <header>
      <div class="header-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt=""></a>
      </div>
      <nav class="header-list">
        <a href="<?php echo get_category_link(7); ?>" class="header-item">
          <li>HTML</li>
        </a>
        <a href="<?php echo get_category_link(6); ?>" class="header-item">
          <li>CSS</li>
        </a>
        <a href="<?php echo get_category_link(5); ?>" class="header-item">
          <li>JavaScript</li>
        </a>
        <a href="<?php echo get_category_link(4); ?>" class="header-item">
          <li>PHP</li>
        </a>
        <a href="<?php echo get_category_link(3); ?>" class="header-item">
          <li>MySQL</li>
        </a>
      </nav>
    </header>