<?php
if ( ! function_exists( 'vtdep_setup' ) ) :

    function vtdep_setup() {

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );

        register_nav_menu('top', 'Header-menu');

        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        add_theme_support( 'customize-selective-refresh-widgets' );


        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'vtdep_setup' );

function vtdep_content_width() {

    $GLOBALS['content_width'] = apply_filters( 'vtdep_content_width', 640 );
}
add_action( 'after_setup_theme', 'vtdep_content_width', 0 );

add_action( 'after_switch_theme', 'bt_flush_rewrite_rules' );

function bt_flush_rewrite_rules() {
    flush_rewrite_rules();
}