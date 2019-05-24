<?php
add_action('init', function() {

    register_post_type('adverts', [
        //передаем настройки
        'labels' => [
            'name' => 'Объявления',//отображается в админке. Основное название
            'singular_name' => 'Объявление',
            'add_new' => 'Добавить',
            'add_new_item' => 'Добавить объявление',
            'edit_item' => 'Редактировать объявление',
            'new_item' => 'Новое объявление',
            'view_item' => 'Показать объявление',
            'search_items' => 'Найти объявление',
            'not_found' => 'Не найдено',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Объявления',
        ],
        'description' => '',
        'public' => true,
        'menu_position' => 25,
        'menu_icon' => 'dashicons-format-quote',
        'hierarchical' => false,
        'supports' => array('title', 'editor'),
        'taxonomies' => array(),
        'has_archive' => true //должены ли эти записи быть доступными на отдельной странице /flats
    ]);
});