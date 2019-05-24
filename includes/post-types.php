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
        'has_archive' => true
    ]);

    register_post_type('info-blocks', [
        //передаем настройки
        'labels' => [
            'name' => 'Инфо-Блоки',
            'singular_name' => 'Инфо-Блок',
            'add_new' => 'Добавить',
            'add_new_item' => 'Добавить Инфо-Блок',
            'edit_item' => 'Редактировать Инфо-Блок',
            'new_item' => 'Новое Инфо-Блок',
            'view_item' => 'Показать Инфо-Блок',
            'search_items' => 'Найти Инфо-Блок',
            'not_found' => 'Не найдено',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Инфо-Блоки',
        ],
        'description' => '',
        'public' => true,
        'menu_position' => 26,
        'menu_icon' => 'dashicons-format-quote',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array(),
        'has_archive' => false
    ]);

    register_taxonomy('Type', array('info-blocks'), array(
        'labels' => array(
            'name' => 'Types',
            'sungular_name' => 'Type',
            'search_items' => 'Search Type',
            'all_items' => 'All Types',
            'view_item' => 'View Type',
            'edit_item' => 'Edit Type',
            'update_item' => 'Update Type',
            'add_new_item' => 'Add New Type',
            'new_item_name' => 'Add New',
            'menu_name' => 'Types',
        ),
        'description' => '',
        'public' => true,
        'hierarchical' => true,
    ));

    register_post_type('best-students', [
        //передаем настройки
        'labels' => [
            'name' => 'Лучшие студенты',
            'singular_name' => 'Лучший студент',
            'add_new' => 'Добавить',
            'add_new_item' => 'Добавить Лучшего студента',
            'edit_item' => 'Редактировать Лучшего студента',
            'new_item' => 'Новый Лучший студент',
            'view_item' => 'Показать Лучшего студента',
            'search_items' => 'Найти Лучшего студента',
            'not_found' => 'Не найдено',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Лучшие студенты',
        ],
        'description' => '',
        'public' => true,
        'menu_position' => 27,
        'menu_icon' => 'dashicons-format-quote',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array(),
        'has_archive' => false
    ]);

    register_post_type('news', [
        //передаем настройки
        'labels' => [
            'name' => 'Новости',
            'singular_name' => 'Новость',
            'add_new' => 'Добавить',
            'add_new_item' => 'Добавить Новость',
            'edit_item' => 'Редактировать Новость',
            'new_item' => 'Новая Новость',
            'view_item' => 'Показать Новость',
            'search_items' => 'Найти Новость',
            'not_found' => 'Не найдено',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Новости',
        ],
        'description' => '',
        'public' => true,
        'menu_position' => 28,
        'menu_icon' => 'dashicons-format-quote',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array(),
        'has_archive' => true
    ]);
});