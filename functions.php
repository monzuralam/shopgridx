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
        add_image_size('blog_thumb', 360, 360, true);
    
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
        ));    
        
        // load textdomain
        load_theme_textdomain( 'shopgridx', get_theme_file_path() . '/languages' );
    
        // Align
        add_theme_support( "align-wide" );
    
        // block style
        add_theme_support( "wp-block-styles" );
    }
    add_action('after_setup_theme','shopgridx_theme_setup');
}