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

    <h4> <?php the_title(); ?> </h4>

    <?php
        // Are there any posts in the DB?
        if ( have_posts() ) {
        while( have_posts() ) {
            the_post();
            if ( has_post_thumbnail() ) {
                the_post_thumbnail(
                    'large',
                    array(
                        'class' => 'image-fluid'
                    )
            );
            }
    ?>

    <div class="col-lg-6">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php
            // Output the post content
            
                the_content();
        ?>

    </article>
    </div>

    <div class="col-lg-6">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <ul>

            <li>
                Property Type: <?php the_field('property_type'); ?>
            </li>

            <li>
                Location: <?php the_field('location'); ?>
            </li>

        </ul>

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