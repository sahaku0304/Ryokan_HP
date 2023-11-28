<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="container">
    <header class="header">
      <div class="header__inner">
        <div class="header__logo">
          <img class="header__logo-img" src="<?php echo get_template_directory_uri(); ?>/asset/img/mainbg01.jpg" loading="lazy">
        </div>
        <nav class="navigation">
          <ul class="navigation__ul">
            <li class="navigation__li">お部屋</li>
            <li class="navigation__li">料理</li>
            <li class="navigation__li">温泉</li>
          </ul>
        </nav>
        <div class="reserve__btn">
          <a href="#">宿泊予約</a>
        </div>
      </div>
    </header>

    <main>

    