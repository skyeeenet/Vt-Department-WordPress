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
        'menu_icon' => 'dashicons-format-status',
        'hierarchical' => false,
        'supports' => array('title', 'editor'),
        'taxonomies' => array(),
        'has_archive' => true
    ]);

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
        'menu_icon' => 'dashicons-star-filled',
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
        'menu_icon' => 'dashicons-admin-site-alt3',
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
        'menu_icon' => 'dashicons-admin-tools',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array(),
        'has_archive' => true
    ]);

    register_post_type('album', [
        //передаем настройки
        'labels' => [
            'name' => 'Альбом',
            'singular_name' => 'Альбом',
            'add_new' => 'Добавить',
            'add_new_item' => 'Добавить Альбом',
            'edit_item' => 'Редактировать Альбом',
            'new_item' => 'Новый Альбом',
            'view_item' => 'Показать Альбом',
            'search_items' => 'Найти Альбом',
            'not_found' => 'Не найдено',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Альбом',
        ],
        'description' => '',
        'public' => true,
        'menu_position' => 31,
        'menu_icon' => 'dashicons-images-alt2',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array(),
        'has_archive' => true
    ]);

    register_taxonomy('tags', array('album'), array(
        'labels' => array(
            'name' => 'Теги',
            'sungular_name' => 'Тег',
            'search_items' => 'Найти Тег',
            'all_items' => 'Все Теги',
            'view_item' => 'Просмотреть Тег',
            'edit_item' => 'Редактировать Тег',
            'update_item' => 'Обновить Тег',
            'add_new_item' => 'Добавить Новый Тег',
            'new_item_name' => 'Добавить Новый',
            'menu_name' => 'Теги',
        ),
        'description' => '',
        'public' => true,
        'hierarchical' => true,
    ));

    register_post_type('team', [
        //передаем настройки
        'labels' => [
            'name' => 'Коллектив',
            'singular_name' => 'Коллектив',
            'add_new' => 'Добавить',
            'add_new_item' => 'Добавить Коллектив',
            'edit_item' => 'Редактировать Коллектив',
            'new_item' => 'Новый Коллектив',
            'view_item' => 'Показать Коллектив',
            'search_items' => 'Найти Коллектив',
            'not_found' => 'Не найдено',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Коллектив',
        ],
        'description' => '',
        'public' => true,
        'menu_position' => 31,
        'menu_icon' => 'dashicons-businessperson',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array(),
        'has_archive' => false
    ]);

    register_taxonomy('categories', array('team'), array(
        'labels' => array(
            'name' => 'Теги',
            'sungular_name' => 'Тег',
            'search_items' => 'Найти Тег',
            'all_items' => 'Все Теги',
            'view_item' => 'Просмотреть Тег',
            'edit_item' => 'Редактировать Тег',
            'update_item' => 'Обновить Тег',
            'add_new_item' => 'Добавить Новый Тег',
            'new_item_name' => 'Добавить Новый',
            'menu_name' => 'Теги',
        ),
        'description' => '',
        'public' => true,
        'hierarchical' => true,
    ));

    register_post_type('schedule', [
        //передаем настройки
        'labels' => [
            'name' => 'Расписание',
            'singular_name' => 'Расписание',
            'add_new' => 'Добавить',
            'add_new_item' => 'Добавить Расписание',
            'edit_item' => 'Редактировать Расписание',
            'new_item' => 'Новое Расписание',
            'view_item' => 'Показать Расписание',
            'search_items' => 'Найти Расписание',
            'not_found' => 'Не найдено',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Расписание',
        ],
        'description' => '',
        'public' => true,
        'menu_position' => 32,
        'menu_icon' => 'dashicons-schedule',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array(),
        'has_archive' => false
    ]);

    register_taxonomy('group', array('schedule'), array(
        'labels' => array(
            'name' => 'Группы',
            'sungular_name' => 'Группа',
            'search_items' => 'Найти Группу',
            'all_items' => 'Все Группы',
            'view_item' => 'Просмотреть Группу',
            'edit_item' => 'Редактировать Группу',
            'update_item' => 'Обновить Группу',
            'add_new_item' => 'Добавить Новую Группу',
            'new_item_name' => 'Добавить Новый',
            'menu_name' => 'Группы',
        ),
        'description' => '',
        'public' => true,
        'hierarchical' => true,
    ));

    register_taxonomy('pair-type', array('schedule'), array(
        'labels' => array(
            'name' => 'Тип пары',
            'sungular_name' => 'Тип Пары',
            'search_items' => 'Найти Тип Пары',
            'all_items' => 'Все Типы Пар',
            'view_item' => 'Просмотреть Пип Пары',
            'edit_item' => 'Редактировать Тип Пары',
            'update_item' => 'Обновить Группу',
            'add_new_item' => 'Добавить Новый Тип',
            'new_item_name' => 'Добавить Новый',
            'menu_name' => 'Тип Пары',
        ),
        'description' => '',
        'public' => true,
        'hierarchical' => true,
    ));

    register_taxonomy('subject', array('schedule'), array(
        'labels' => array(
            'name' => 'Предметы',
            'sungular_name' => 'Предмет',
            'search_items' => 'Найти Предмет',
            'all_items' => 'Все Предметр',
            'view_item' => 'Просмотреть Предмет',
            'edit_item' => 'Редактировать Предмет',
            'update_item' => 'Обновить Предмет',
            'add_new_item' => 'Добавить Новый Предмет',
            'new_item_name' => 'Добавить Новый',
            'menu_name' => 'Предметы',
        ),
        'description' => '',
        'public' => true,
        'hierarchical' => true,
    ));

    register_taxonomy('teacher', array('schedule'), array(
        'labels' => array(
            'name' => 'Преподаватели',
            'sungular_name' => 'Преподаватель',
            'search_items' => 'Найти Преподавателя',
            'all_items' => 'Все Преподаватели',
            'view_item' => 'Просмотреть Преподавателя',
            'edit_item' => 'Редактировать Преподавателя',
            'update_item' => 'Обновить Преподавателя',
            'add_new_item' => 'Добавить Нового Преподавателя',
            'new_item_name' => 'Добавить Новый',
            'menu_name' => 'Преподаватели',
        ),
        'description' => '',
        'public' => true,
        'hierarchical' => true,
    ));

    register_taxonomy('number', array('schedule'), array(
        'labels' => array(
            'name' => 'Номера пар',
            'sungular_name' => 'Номер пары',
            'search_items' => 'Найти Номер пары',
            'all_items' => 'Все Номера пар',
            'view_item' => 'Просмотреть Номер пары',
            'edit_item' => 'Редактировать Номер пары',
            'update_item' => 'Обновить Номер пары',
            'add_new_item' => 'Добавить Номер пары',
            'new_item_name' => 'Добавить Новый',
            'menu_name' => 'Номера пар',
        ),
        'description' => '',
        'public' => true,
        'hierarchical' => true,
    ));

    register_taxonomy('week', array('schedule'), array(
        'labels' => array(
            'name' => 'Неделя',
            'sungular_name' => 'Неделя',
            'search_items' => 'Найти Неделю',
            'all_items' => 'Все Недели',
            'view_item' => 'Просмотреть Неделю',
            'edit_item' => 'Редактировать Неделю',
            'update_item' => 'Обновить Неделю',
            'add_new_item' => 'Добавить Неделю',
            'new_item_name' => 'Добавить Новый',
            'menu_name' => 'Недели',
        ),
        'description' => '',
        'public' => true,
        'hierarchical' => true,
    ));

    register_taxonomy('day', array('schedule'), array(
        'labels' => array(
            'name' => 'День',
            'sungular_name' => 'День',
            'search_items' => 'Найти НДень',
            'all_items' => 'Все Дни',
            'view_item' => 'Просмотреть День',
            'edit_item' => 'Редактировать День',
            'update_item' => 'Обновить День',
            'add_new_item' => 'Добавить День',
            'new_item_name' => 'Добавить Новый',
            'menu_name' => 'День',
        ),
        'description' => '',
        'public' => true,
        'hierarchical' => true,
    ));
});