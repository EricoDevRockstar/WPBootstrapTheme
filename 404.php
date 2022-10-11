<?php
/** 
 * The 404 Page Template file
 * 
 * This is the file is displayed when the page or content is not found.
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
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail(
                        'large',
                        array(
                            'class' => 'image-fluid'
                        )
                );
                }
        ?>

        <div class="col-md-8 offset-md-2 overflow-hidden">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php
                // Output the post content
                
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