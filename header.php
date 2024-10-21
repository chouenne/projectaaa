<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:opsz,wght@6..96,600;6..96,700;6..96,800&family=Poppins:wght@200;300;400;500;600;700&family=Roboto:wght@100;300;400;500;700&display=swap"
    rel="stylesheet">
  <title>aaa website</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <?php wp_head(); ?>

</head>

<body>
  <header id="header">
    <div class="container">
      <nav class="header-flex">
        <!-- Left side of the menu -->
        <ul class="menu-list left-menu">
          <?php
          // Menu for the left side
          wp_nav_menu(array(
            'theme_location' => 'header-left',
            'container' => false,
            'items_wrap' => '%3$s', // Only the items
          ));
          ?>
        </ul>

        <!-- Logo in the middle -->
        <div class="logo">
          <?php the_custom_logo(); ?>
        </div>

        <!-- Right side of the menu -->
        <ul class="menu-list right-menu">
          <?php
          // Menu for the right side
          wp_nav_menu(array(
            'theme_location' => 'header-right',
            'container' => false,
            'items_wrap' => '%3$s', // Only the items
          ));
          ?>
        </ul>

        <!-- Burger Menu for mobile view -->
        <div id="burger">
          <i class="fa-solid fa-bars"></i>
        </div>
      </nav>
    </div>
  </header>