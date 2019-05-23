<?php

function vtdep_scripts() {
    wp_enqueue_style( 'vtdep-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'vtdep-style-1', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'vtdep-style-2', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'vtdep-style-3', get_template_directory_uri() . '/assets/css/slick-theme.css' );


    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(),false, true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array(),false, true);
    wp_enqueue_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array(),false, true);
    wp_enqueue_script( 'vtdep-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'vtdep_scripts' );
