<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Настройки главной страницы' )
    ->show_on_template('templates/home-page.php')
    ->add_fields(array(
        Field::make('complex', 'el_home_advantages', 'Преимущества')->add_fields(array(
            Field::make('image', 'photo', 'Изображение')->set_value_type('url'),
            Field::make('text', 'title', 'Заголовок'),
            Field::make('textarea', 'description', 'Описание (не более 90 символов)'),
        ))
    ));

/* ABOUT */
Container::make( 'post_meta', 'Настройки страницы "О кафедре"' )
    ->show_on_template('templates/about-page.php')
    ->add_fields(array(
        Field::make('rich_text', 'el_about_upper_text', 'Текст до слайдера')->set_width(50),
        Field::make('rich_text', 'el_about_lower_text', 'Текст после слайдера')->set_width(50),
        Field::make('text', 'el_about_terms', 'График работы'),
        Field::make('complex', 'el_about_documents', 'Документы')->add_fields(array(
            Field::make('text', 'title', 'Заголовок'),
            Field::make('file', 'file', 'Документ')->set_value_type('url'),
        )),
        Field::make('image', 'el_about_info', 'Инфографика')->set_value_type('url'),
    ));

/* Certification */
Container::make( 'post_meta', 'Настройки страницы "Дипломирование"' )
    ->show_on_template('templates/certification-page.php')
    ->add_fields(array(
        Field::make('text', 'el_certification_gost', 'Гост')->set_width(50),
        Field::make('file', 'el_certification_gost_file', 'Файл госта')->set_width(50)->set_value_type('url'),
        Field::make('text', 'el_certification_guidelines', 'Методические указания')->set_width(50),
        Field::make('file', 'el_certification_guidelines_file', 'Файл методических указаний')->set_width(50)->set_value_type('url'),
        Field::make('complex', 'el_certification_conf', 'Группы')->add_fields(array(
            Field::make('text', 'year', 'Год'),
            Field::make('text', 'degree', 'Степень'),
            Field::make('text', 'group', 'Группа'),

        )),
    ));

/* Univer Conf */
Container::make( 'post_meta', 'Настройки страницы "УНИВЕРСИТЕТСКАЯ НАУКА"' )
    ->show_on_template('templates/univ-conf.php')
    ->add_fields(array(
        Field::make('complex', 'el_univ_confs', 'Конференции')->add_fields([
            Field::make('text', 'el_univ_date', 'Дата проведения')->set_width(100),
            Field::make('text', 'el_univ_place', 'Место проведения')->set_width(50),
            Field::make('text', 'el_univ_time', 'Время проведения')->set_width(50),
            Field::make('text', 'el_univ_chairman', 'Председатель')->set_width(50),
            Field::make('text', 'el_univ_secretary', 'Секретарь')->set_width(50),
            Field::make('checkbox', 'el_univ_register', 'Регистрация открыта ?')->set_width(100),
            Field::make('text', 'el_univ_register_date', 'Время регистрации')->set_width(100)
                ->set_conditional_logic(array(
                    'relation' => 'AND',
                    array(
                        'field' => 'el_univ_register',
                        'value' => 1,
                        'compare' => '=',
                    )
                )),
            Field::make('complex', 'participants', 'Участники')->add_fields([
                Field::make('text', 'theme', 'Тема'),
                Field::make('text', 'fio', 'ФИО'),
            ]),
            Field::make('file', 'el_univ_protocol', 'Протокол проведения')->set_width(50)->set_value_type('url'),
            Field::make('file', 'el_univ_theses', 'Сборник тезисов')->set_width(50)->set_value_type('url'),
            Field::make('complex', 'slides', 'Слайды')->add_fields([
                Field::make('image', 'image', 'Слайд')->set_value_type('url'),
            ]),
        ]),
    ));

/* Stud Conf */
Container::make( 'post_meta', 'Настройки страницы "СТУДЕНЧЕСКАЯ НАУКА"' )
    ->show_on_template('templates/conf-stud.php')
    ->add_fields(array(
        Field::make('complex', 'el_stud_confs', 'Конференции')->add_fields([
            Field::make('text', 'el_univ_date', 'Дата проведения')->set_width(100),
            Field::make('text', 'el_univ_place', 'Место проведения')->set_width(50),
            Field::make('text', 'el_univ_time', 'Время проведения')->set_width(50),
            Field::make('text', 'el_univ_chairman', 'Председатель')->set_width(50),
            Field::make('text', 'el_univ_secretary', 'Секретарь')->set_width(50),
            Field::make('checkbox', 'el_univ_register', 'Регистрация открыта ?')->set_width(100),
            Field::make('text', 'el_univ_register_date', 'Время регистрации')->set_width(100)
                ->set_conditional_logic(array(
                    'relation' => 'AND',
                    array(
                        'field' => 'el_univ_register',
                        'value' => 1,
                        'compare' => '=',
                    )
                )),
            Field::make('complex', 'participants', 'Участники')->add_fields([
                Field::make('text', 'theme', 'Тема'),
                Field::make('text', 'fio', 'Докладчик'),
                Field::make('text', 'lead', 'Руководитель'),
            ]),
            Field::make('file', 'el_univ_protocol', 'Протокол проведения')->set_width(50)->set_value_type('url'),
            Field::make('file', 'el_univ_theses', 'Сборник тезисов')->set_width(50)->set_value_type('url'),
            Field::make('complex', 'slides', 'Слайды')->add_fields([
                Field::make('image', 'image', 'Слайд')->set_value_type('url'),
            ]),
        ]),
    ));

/* HISTORY */
Container::make( 'post_meta', 'Настройки страницы "История кафедры"' )
    ->show_on_template('templates/history-page.php')
    ->add_fields(array(
        Field::make('rich_text', 'el_history_lower', 'Текст после слайдера'),
        Field::make('complex', 'el_history_slides', 'Слайд')->add_fields([
            Field::make('image', 'image', 'Слайд')->set_value_type('url'),
        ])
    ));

/* PLANE */
Container::make( 'post_meta', 'Настройки страницы "Графики и планы"' )
    ->show_on_template('templates/plane-page.php')
    ->add_fields(array(
        Field::make('text', 'el_plane_first', 'Первая аттестация')->set_width(50),
        Field::make('text', 'el_plane_second', 'Вторая аттестация')->set_width(50),
        Field::make('text', 'el_plane_session', 'Сессия')->set_width(50),
        Field::make('text', 'el_plane_rest', 'Каникулы')->set_width(50),
        Field::make('complex', 'el_plane_planes', 'Группы')->add_fields(array(
            Field::make('text', 'group', 'Группа')->set_width(50),
            Field::make('file', 'file', 'Файл для загрузки')->set_width(50)->set_value_type('url'),

        )),
    ));

/* SPECIALTY */
Container::make( 'post_meta', 'Настройки специальностей' )
    ->show_on_post_type('specialty')
    ->add_fields(array(
        Field::make('textarea', 'el_specialty_preview', 'Краткое описание'),
    ));

/* NEWS */
Container::make( 'post_meta', 'Настройки новостей' )
    ->show_on_post_type('news')
    ->add_fields(array(
        Field::make('textarea', 'el_news_preview', 'Краткое описание'),
    ));

/* TEAM */
Container::make( 'post_meta', 'Настройки коллектива' )
    ->show_on_post_type('team')
    ->add_fields(array(
        Field::make('text', 'el_team_duty', 'Должность')->set_width(50),
        Field::make('text', 'el_team_dep', 'Кафедра')->set_width(50),
        Field::make('text', 'el_team_email', 'Email')->set_width(33),
        Field::make('text', 'el_team_phone', 'Телефон')->set_width(33),
        Field::make('text', 'el_team_fb', 'Facebook')->set_width(33),
        Field::make('text', 'el_team_ntb', 'Электронный репозиторий НТБ ПГТУ')->set_width(100),
    ));

/* ALBUM */
Container::make( 'post_meta', 'Настройки альбома' )
    ->show_on_post_type('album')
    ->add_fields(array(
        Field::make('image', 'el_album_image', 'Полное изображение')->set_value_type('url'),
    ));