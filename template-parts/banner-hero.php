<?php
/**
 * Title Banner and Subscribe bar
 * 
 * @package WpBootstrapTheme
 * @since 2.1.0
 */
?>

<?php
  $blog_info = get_bloginfo('name');

  $description = get_bloginfo('description', 'display');
?>

<section class="title-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0 overflow-hidden text-center">
          <!-- <p class="tag-line sub-title">Bootstrap to WordPress Course 2.0</p>
          <h1 class="page-title">Blog</h1> -->

            
          <?php

            if ( is_page() ) {

                the_title( '<h1 class="page-title">', '</h1>' );

              } elseif ( is_single() ) {
              ?>
                <p class="tag-line sub-title"><?php echo get_the_date( 'M d, Y' ); ?></p>
              <?php
              the_title('<h1 class="page-title">', '</h1>');

              } elseif ( ! is_front_page() && is_home() ) {

                // in WP settings you can set a page as the Posts Page
                // This will return the ID of the Page assigned to display the Blog Posts Index
                $WPBootstrapTheme_title = get_the_title( get_option( 'page_for_posts', true ) );

              ?>

                <h1 class="page-title"><?php echo esc_html( $WPBootstrapTheme_title ); ?></h1>

              <?php
              } elseif ( is_home() ) {

                if ( $description ) {
              ?>

                <p class="tag-line sub-title"><?php echo esc_html( $description ) ?></p>

                <?php
                }
                ?>

                <h1><?php esc_html_e( 'WP Bootstrap Theme Blog', 'WPBootstrapTheme' ); ?> </h1>

              <?php
              } elseif ( is_archive() ) {

                the_archive_title( '<h1 class="page-title">', '</h1>' );

              } elseif ( is_404() ) {
              ?>

                <p class="tag-line sub-title">404 Error</p>
                <h1><?php esc_html_e( 'Couldn\'t Be Found', 'WPBootstrapTheme' ); ?></h1>

              <?php
              } elseif ( is_search() ) {

                $search_title = sprintf( '%s %s', __('Search results for: ', 'WPBootstrapTheme'), get_search_query() );
              ?>

                <h1 class="page-title"><?php echo esc_html( $search_title ); ?></h1>

              <?php
            }

          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="subscribe-bar">
    <div class="container">
      <div class="row flex-vertical-center">
        <div class="col-sm-6">
          <p><strong>Want to save 80% on the course?</strong> Enter your email and we'll send you the discount code!</p>
        </div>
        <div class="col-sm-6">
          <form action="index.html" class="" method="post">
          	<div class="row">
          		<div class="col-lg-8">
          			<input name="test" type="text" value="">
          		</div>
          		<div class="col-lg-4">
          			<button class="btn btn-invert m-0" name="button" type="button">Subscribe</button>
          		</div>
          	</div>
          </form>
        </div>
      </div>
    </div>
  </section>