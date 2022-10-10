<?php
/** 
 * The Main Template file
 * 
 * This is the most general template file in the WordPress Theme Hierarchy and is one of the two files required for a theme to work. The other file required is style.css 
 * 
 * @link https//developer.wordpress.org/theme/basics/template-hierarchy/
 * 
 * @package WPBootstrapTheme
 * @since 2.1.0
*/

  get_header();

  get_template_part('template-parts/banner', 'hero');

?>

  <div class="content-area">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 overflow-hidden">

          <?php

            if ( have_posts() ) {

              while( have_posts() ) {

                the_post();
                get_template_part( 'template-parts/content', 'excerpt');

              }

              WPBootstrapTheme_pagination();

            } else {
              get_template_part( 'template-parts/content', 'none');
            }

          ?>

        </div>
      </div>
    </div>
  </div>

 <?php get_footer(); ?>