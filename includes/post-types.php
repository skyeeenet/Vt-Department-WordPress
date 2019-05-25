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
        'menu_position' => 29,
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

    register_taxonomy('degree', array('info-blocks'), array(
        'labels' => array(
            'name' => 'Degrees',
            'sungular_name' => 'Degree',
            'search_items' => 'Search Degree',
            'all_items' => 'All Degrees',
            'view_item' => 'View Degree',
            'edit_item' => 'Edit Degree',
            'update_item' => 'Update Degree',
            'add_new_item' => 'Add New Degree',
            'new_item_name' => 'Add New',
            'menu_name' => 'Degrees',
        ),
        'description' => '',
        'public' => true,
        'hierarchical' => true,
    ));

    register_taxonomy('groups', array('info-blocks'), array(
        'labels' => array(
            'name' => 'Groups',
            'sungular_name' => 'Group',
            'search_items' => 'Search Group',
            'all_items' => 'All Groups',
            'view_item' => 'View Group',
            'edit_item' => 'Edit Group',
            'update_item' => 'Update Group',
            'add_new_item' => 'Add New Group',
            'new_item_name' => 'Add New',
            'menu_name' => 'Groups',
        ),
        'description' => '',
        'public' => true,
        'hierarchical' => true,
    ));

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

    register_post_type('specialty', [
        //передаем настройки
        'labels' => [
            'name' => 'Специальности',
            'singular_name' => 'Специальность',
            'add_new' => 'Добавить',
            'add_new_item' => 'Добавить Специальность',
            'edit_item' => 'Редактировать Специальность',
            'new_item' => 'Новая Специальность',
            'view_item' => 'Показать Специальность',
            'search_items' => 'Найти Специальность',
            'not_found' => 'Не найдено',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Специальности',
        ],
        'description' => '',
        'public' => true,
        'menu_position' => 30,
        'menu_icon' => 'dashicons-format-quote',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array(),
        'has_archive' => true
    ]);
});