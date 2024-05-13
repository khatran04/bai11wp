<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    
<header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
        <?php
        $sitename = get_bloginfo('title');
        $sitename_parts = explode(' ', $sitename); 
        $first_word = array_shift($sitename_parts); 
        $rest_of_title = implode(' ',  $sitename_parts); 
        ?>
        <a href="<?php echo get_bloginfo('home')?>"><strong><?php echo $first_word; ?></strong><?php echo $rest_of_title; ?></a>

        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <!-- <nav class="main-navigation">
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </nav> -->
          <?php
          wp_nav_menu( array(
            'theme_location' => 'primary_menu',
            'container'            => 'nav',
            'container_class'      => 'main-navigation',
          ));
          ?>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>
