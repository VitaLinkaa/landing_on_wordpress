<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('description'); ?></title>

  <?php wp_head(); ?>

</head>

<body>
  <div class="progress"></div>
  <header class="header" style="background-image:url(<?php the_field('header_bg'); ?>)">
    <div class="header__inner">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo">
      <div class="header__name">
        <?php the_field('header_name'); ?>

      </div>
      <i class="fas fa-phone animated heartBeat infinite ease-in-out"></i><a class="header__phone" href="<?php the_field('header_phone'); ?>"><?php the_field('header_phone'); ?></a>
      <div class="header__title"><?php the_field('header_title'); ?></div>
      <div class="header__sale">
        <img src="<?php the_field('header_sale'); ?>" alt="sale">
      </div>
    </div>

    <nav class="header__nav">
      <ul>
        <li><a href="#project">Проекты</a></li>
        <li><a href="#gallery">Галерея</a></li>
        <li><a href="#contacts">Контакты</a></li>
      </ul>
    </nav>
  </header>