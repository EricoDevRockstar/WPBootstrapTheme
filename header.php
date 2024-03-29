<?php
/**
 * The Header File
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package WPBootstrapTheme
 * @since WP Bootstrap Theme 07.24.2022
 */

 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title>Bootstrap to WordPress 2.0</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

  <div id="top-navigation">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6">
         
        <!-- <nav class="main-menu">
            <ul class="top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled">
              <li class="menu-item"><a href="index.html">Home</a></li>

              <li class="menu-item menu-item-has-children"><a href="index.html">Blog</a>

                <ul class="sub-menu">
                  <li class="menu-item"><a href="single.html">Single post</a></li>
                  <li class="menu-item"><a href="widgets.html">Widgets</a></li>
                  <li class="menu-item"><a href="index.html">Contact</a></li>

                  <li class="menu-item menu-item-has-children"><a href="index.html">Blog</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="index.html">Blog</a></li>
                      <li class="menu-item"><a href="index.html">FAQ</a></li>
                      <li class="menu-item"><a href="index.html">Contact</a></li>
                    </ul>
                  </li>

                </ul>

              </li>

              <li class="menu-item"><a href="widgets.html">Widgets</a></li>
              <li class="menu-item"><a href="index.html">Contact</a></li>
              <li class="menu-item special-menu"><a href="index.html">Join</a></li>
            </ul>
          </nav> -->

          <?php
          // Create a Dynamic Menu
            wp_nav_menu(
              array(
                'theme_location' => 'primary', // As registed in function.php
                'depth' => 3, // As set up in our CSS
                'container' => 'nav', // HTML wrapper in the menu ul
                'container_class' => 'main-menu', // Wrapper class
                'menu_class' => 'top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled',
                'fallback_cb' => false
              )
            );
          ?>

          <button type="button" class="navbar-open">
            <i class="mobile-nav-toggler flaticon flaticon-menu"></i>
          </button>

        </div>
      </div>

      <!-- Mobile Menu -->
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn">
          <i class="flaticon flaticon-close"></i>
        </div>
        <nav class="menu-box">
          <ul class="navigation clearfix"></ul>
        </nav>
      </div>

    </div>
  </div>
