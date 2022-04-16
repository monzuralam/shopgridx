<?php
if( !function_exists('shopgridx_theme_setup') ){
    function shopgridx_theme_setup(){
        /**
         * Custom Background
         */
        add_theme_support(
            'custom-background',array(
                'default-color' =>  '222'
            )
        );
    
        /**
         * Custom logo
         */
        $defaults = array(
            'width'     =>  '150',
            'height'    =>  '50',
            'flex-width'=>  true,
            'flex-height'=> true,
            'header-text'=> array( 'site-title', 'site-description')
        );
        add_theme_support('custom-logo');
    
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
    
        // Feed link
        add_theme_support( 'automatic-feed-links' );
    
        /**
         * Custom image size
         */
        add_image_size('blog_thumb', 370, 215, true);
    
        // Title support
        add_theme_support( 'title-tag' );
    
        // Html Supports
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets'
            )
        );
    
        // responsive embeds
        add_theme_support('responsive-embeds');
    
        // editor style
        add_editor_style('assets/css/editor-style.css');
    
        // register menu
        register_nav_menus(array(
            'primary_menu'  =>  __('Primary Menu','shopgridx'),
            'category_menu'  =>  __('Category Menu','shopgridx'),
            'top_menu'  =>  __('Top Menu','shopgridx'),
        ));    
        
        // load textdomain
        load_theme_textdomain( 'shopgridx', get_theme_file_path() . '/languages' );
    
        // Align
        add_theme_support( "align-wide" );
    
        // block style
        add_theme_support( "wp-block-styles" );

        // Woocommerce
        add_theme_support( "woocommerce", array(
            'thumbnail_image_width'     => 255,
            'single_image_width'        => 255,
            'product_grid'              =>  array(
                'default_rows'      =>  10,
                'min_rows'          =>  5,
                'max_rows'          =>  10,
                'default_columns'   =>  2,
                'min_columns'       =>  2,
                'max_columns'       =>  2
            )
        ));

        add_theme_support("wc-product-gallery-zoom");
        add_theme_support("wc-product-gallery-slider");
        add_theme_support("wc-product-gallery-lightbox");
    }
    add_action('after_setup_theme','shopgridx_theme_setup');
}

if( !function_exists('shopgridx_assets') ){
    function shopgridx_assets(){
        wp_enqueue_style( 'LineIcons', get_theme_file_uri(). '/assets/css/LineIcons.3.0.css', array(), '1.0.0', 'all');
        wp_enqueue_style( 'bootstrap', get_theme_file_uri(). '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style( 'editor-style', get_theme_file_uri(). '/assets/css/editor-style.css', array(), '1.0.0', 'all');
        wp_enqueue_style( 'glightbox', get_theme_file_uri(). '/assets/css/glightbox.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style( 'tiny-slider', get_theme_file_uri(). '/assets/css/tiny-slider.css', array(), '1.0.0', 'all');
        wp_enqueue_style( 'main', get_theme_file_uri(). '/assets/css/main.css', array(), '1.0.0', 'all');
        wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    
        wp_enqueue_script( 'bootstrap', get_theme_file_uri(). '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', 'all');
        wp_enqueue_script( 'glightbox', get_theme_file_uri(). '/assets/js/glightbox.min.js', array('jquery'), '1.0.0', 'all');
        wp_enqueue_script( 'tiny-slider', get_theme_file_uri(). '/assets/js/tiny-slider.js', array('jquery'), '1.0.0', 'all');
        wp_enqueue_script( 'main', get_theme_file_uri(). '/assets/js/main.js', array('jquery'), '1.0.0', 'all');
    }
    add_action('wp_enqueue_scripts','shopgridx_assets');
}