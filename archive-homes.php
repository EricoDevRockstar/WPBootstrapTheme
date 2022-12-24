<?php

/** 
 * Template Name: Archives
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

    <h2>Archives by Month:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Subject:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
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

<?php get_sidebar(); ?>
<?php get_footer();

<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="container">
	<div id="content" role="main">

		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php get_search_form(); ?>
		
		<h2>Archives by Month:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Subject:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>

	</div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>