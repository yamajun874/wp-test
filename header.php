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
        <a href="<?php esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt=""></a>
      </div>
      <!-- header-listの相対パスはどうするか？ -->
      <nav class="header-list">
        <a href="HTML.html" class="header-item">
          <li>HTML</li>
        </a>
        <a href="CSS.html" class="header-item">
          <li>CSS</li>
        </a>
        <a href="javascript.html" class="header-item">
          <li>JavaScript</li>
        </a>
        <a href="PHP.html" class="header-item">
          <li>PHP</li>
        </a>
        <a href="mysql.html" class="header-item">
          <li>MySQL</li>
        </a>
      </nav>
    </header>