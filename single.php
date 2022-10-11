<?php
/** 
 * The Single BLog Template file
 * 
 * This is the file powering the single blog post in our blog.
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

    <?php
        // Are there any posts in the DB?
        if ( have_posts() ) {
        while( have_posts() ) {
            the_post();
    ?>

    <div class="col-md-8 offset-md-2 overflow-hidden">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php
            // Output the thumbnail and the post content
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('full');
            }
                the_content();
        ?>

    </article>
    </div>

    <?php
        // Output this incase there are no posts
        }
         } else {
            get_template_part( 'template-parts/content', 'none');
          }
    ?>

  </div>

</div>

</div>

<?php get_footer();