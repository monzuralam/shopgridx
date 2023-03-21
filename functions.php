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
                'default_columns'   =>  3,
                'min_columns'       =>  3,
                'max_columns'       =>  3
            )
        ));

        add_theme_support("wc-product-gallery-zoom");
        add_theme_support("wc-product-gallery-slider");
        add_theme_support("wc-product-gallery-lightbox");

        if( !isset($content_width) ){
            $content_width = 600;
        }
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

/**
 * Register sidebar.
 */
if( !function_exists('shopgridx_register_sidebar') ){
    function shopgridx_register_sidebar() {
        register_sidebar( array(
            'name'          => __( 'Main Sidebar', 'shopgridx' ),
            'id'            => 'sidebar',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'shopgridx' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Shop Sidebar', 'shopgridx' ),
            'id'            => 'shop-sidebar',
            'description'   => __( 'Widgets in this area will be shown on shop, single product & archive product.', 'shopgridx' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>',
        ) );
    }
    add_action( 'widgets_init', 'shopgridx_register_sidebar' );
}

/**
 * Remove hook
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );