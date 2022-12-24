<?php

if ( !function_exists( 'WPBootstrapTheme_setup' ) ) {

    /* Theme Setup */
    
    function WPBootstrapTheme_setup() {
    
    load_theme_textdomain('WPBootstrapTheme', get_template_directory() . '/languages');
    
    add_theme_support( 'title-tag' );
    
    add_theme_support( 'post-thumbnails' );
    
    add_theme_support(
    
    'html5',
    
        array(
        
            'search-form',
            
            'comment-form',
            
            'comment-list',
            
            'gallery',
            
            'caption'
        
        )
    
    );
    
    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('responsive-embeds');

        register_nav_menus(

        array(

        'primary' => esc_html__('Primary Menu')

        )

    );
    
    }
    
    }

    add_action('after_setup_theme', 'WPBootstrapTheme_setup');

/*
Enqueue scripts and styles
*/

function WPBootstrapTheme_assets() {

    // Enqueue CSS Files
    wp_enqueue_style( 'google-font-Raleway', '//fonts.googleapis.com/css?family=Raleway:400,600,700', array(), 1.1, 'all' );
    wp_enqueue_style( 'google-font-Montserrat', '//fonts.googleapis.com/css?family=Montserrat:400,700', array(), 1.2, 'all' );

    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), 1.0, 'all' );

    wp_enqueue_style( 'bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'), array(), 'v5.1.1', 'all' );

    wp_enqueue_style( 'flaticon', get_theme_file_uri('assets/font/flaticon.css'), array(), false, 'all' );

    // Main CSS File
    wp_enqueue_style( 'WPBootstrapTheme', get_stylesheet_uri(), array('bootstrap'), 1.0, 'all' );

    // Enqueue JS Files
    // Don't enqueue jQuery files it'll be loaded from WordPress when required.
    
    wp_enqueue_script( 'bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array(), 'v5.1.1', true );

    wp_enqueue_script( 'WPBootstrapTheme-js', get_theme_file_uri('assets/js/bootstrap.main.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectmenu'), '1.0', true );

    if( is_singular() && comments_open() && get_option( 'thread_comments' )) {

        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'WPBootstrapTheme_assets' );

/* Custom Readmore Text */
function WPBootstrapTheme_readmore( $more ) {
    return '...';
}

add_filter( 'excerpt_more', 'WPBootstrapTheme_readmore');

function WPBootstrapTheme_pagination() {

    global $wp_query;
    $links = paginate_links(
      array(
        'current'   => max( 1, get_query_var( 'paged') ),
        'total'     => $wp_query -> max_num_pages,
        'type'      => 'list',
        'prev_text' => '<-',
        'next_text' =>  '->'
      )
    );
    $links = '<nav class="WPBootstrapTheme-pagination">' . $links;
    $links .= '</nav>';
    echo wp_kses_post( $links );
  
  }

  /* Add Customizer Functionality */
require get_template_directory() . '/includes/customizer-WPBootstrapTheme.php';


// Create A Custom Post Type
function types_of_homes() {

    $beautifulHomes = array(

        'labels' => array(
            'name' => 'Homes',
            'singular_name' => 'Home'
        ),

        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-multisite',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('homes', $beautifulHomes);
}

add_action('init', 'types_of_homes');


function homes_taxonomy() {

    $homesLabels = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand',
        ),

        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy('brans', array('homes'), $homesLabels);
}

add_action('init', 'homes_taxonomy');