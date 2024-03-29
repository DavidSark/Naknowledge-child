<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Reem Kufi' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <?php wp_head(); ?> <!--TRES IMPORTANT-->
  </head>

  <body>
    <div class="wrap">

      <header>
        <h1><a><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
        
        <nav class="menu-header header_phone">
          <?php 
            wp_nav_menu ( array (
            'theme_location' => 'header-mobile',
            "menu_class" => "none"
          ) ); ?>
        </nav>

        <nav class="menu-header header_ordi">
          <a href="https://davidsarkissian.fr/naknowlecons/">Naknowledge</a>
          <div class="header_ordi-items">
            <?php 
              wp_nav_menu ( array (
              'theme_location' => 'header-ordi',
              "menu_class" => "none"
            ) ); ?>
          </div>
        </nav>
      </header>
