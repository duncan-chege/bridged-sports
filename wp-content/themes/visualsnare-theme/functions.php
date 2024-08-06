<?php 
    function main_files(){
        wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap', false);
        wp_enqueue_style('bootstrap5', "//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
        wp_enqueue_style('splide-css', '//cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');
        wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap');
        wp_enqueue_style('bootstrap-icons', "//cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
        wp_enqueue_style('custom-style',  get_template_directory_uri().'/assets/css/custom.css');
        wp_enqueue_style('responsive-style',  get_template_directory_uri().'/assets/css/responsive.css');
        wp_enqueue_style('main-css', get_stylesheet_uri());
    
        wp_enqueue_script( 'jQuery','//code.jquery.com/jquery-3.2.1.slim.min.js', array('jquery'));
        wp_enqueue_script( 'splide-js', '//cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js');
        wp_enqueue_script( 'splide-fade', "//cdn.jsdelivr.net/npm/@splidejs/splide-extension-fade@0.3.1/dist/js/splide-extension-fade.min.js");
        wp_enqueue_script( 'popper','//cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js');
        wp_enqueue_script( 'bootstrap-js','//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js' );
        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true );
    }

    add_action('wp_enqueue_scripts', 'main_files');

    function wpb_custom_new_menu() {
        register_nav_menu('main-menu', 'Main menu');
    }
    add_action( 'init', 'wpb_custom_new_menu' );


    require_once get_template_directory() .'/class-wp-bootstrap-navwalker.php';

    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    add_post_type_support('page', 'excerpt');

    // Adding wide image support to a Gutenburg block
    add_theme_support( 'align-wide' );

    //Page Slug Body Class
    function add_slug_body_class( $classes ) {
        global $post;
        if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
        }
        return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );

 


?>