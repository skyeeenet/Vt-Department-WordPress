<?php

include_once(__DIR__.'/widgets/header-widget.php');
include_once(__DIR__.'/widgets/footer-widget.php');
include_once(__DIR__.'/widgets/recent_posts.php');

function vtdep_widgets_init() {

    register_sidebar([
        'name' => 'Header-Sidebar',
        'description' => 'Редактирование шапки',
        'id' => 'header_sidebar'
    ]);

    register_sidebar([
        'name' => 'Footer-Sidebar',
        'description' => 'Редактирование футера',
        'id' => 'footer_sidebar'
    ]);

    register_sidebar([
        'name' => 'Right-Sidebar',
        'description' => 'Правая колонка',
        'id' => 'right_sidebar'
    ]);

    register_widget('Widget_Header');
    register_widget('Widget_Footer');
    register_widget('Recent_Posts');
}

add_action( 'widgets_init', 'vtdep_widgets_init' );