<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Add second options page under 'Basic Options'
Container::make( 'theme_options', 'Настройки темы' )
	->set_icon('dashicons-carrot')
	->add_tab( 'Шапка', array(
		Field::make( 'image', 'el_header_logo', 'Логотип' )
			->set_width(10),
		Field::make( 'text', 'el_address', 'Адрес' )
            ->set_width(35),
		Field::make( 'text', 'el_email', 'Email' )
            ->set_width(30),
        Field::make( 'checkbox', 'el_week', 'Инвертировать неделю ?' )
            ->set_width(15),
	) )
	->add_tab( 'Подвал', array(
		Field::make( 'text', 'el_footer_rights', 'Копирайт внизу страницы' ),
		Field::make( 'text', 'el_footer_team', 'Название команды' ),
		Field::make( 'text', 'el_footer_team_url', 'Ссылка на сайт команды' ),
	) )
    ->add_tab( 'Специальность', array(
        Field::make( 'rich_text', 'el_sp_upper', 'Основной текст' ),
        Field::make('complex', 'el_sp_zno', 'Предметы на зно')->add_fields([
            Field::make('image', 'image', 'Изображение')->set_value_type('url')->set_width(33),
            Field::make('text', 'name', 'Предмет')->set_width(33),
            Field::make('text', 'points', 'Баллы')->set_width(33),
        ]),
        Field::make( 'rich_text', 'el_sp_lower', 'Нижний текст' ),
        Field::make('complex', 'el_sp_dic', 'Дисциплины')->add_fields([

            Field::make('text', 'kyrs', 'Курс')->set_width(100),
            Field::make('complex', 'el_sp_sem', 'Семестры')->add_fields([

                Field::make('text', 'semestr', 'Семестр')->set_width(100),
                Field::make('complex', 'dic', 'Дисциплины')->add_fields([

                    Field::make('color', 'color', 'Цвет фона')->set_width(33),
                    Field::make('text', 'name', 'Предмет')->set_width(33),
                ]),
            ]),
        ]),
        Field::make('complex', 'el_sp_slides', 'Слайды')->add_fields([
            Field::make('image', 'image', 'Изображение')->set_value_type('url')->set_width(100),
        ]),
        Field::make('rich_text', 'el_sp_ultra_lower', 'Текст снизу страницы')->set_width(100),
        Field::make('complex', 'el_sp_oversea', 'Заграничная стажировка')->add_fields([
            Field::make('image', 'image', 'Изображение')->set_value_type('url')->set_width(100),
        ]),
        Field::make('complex', 'el_sp_sponsors', 'Спонсоры')->add_fields([
            Field::make('image', 'image', 'Изображение')->set_value_type('url')->set_width(100),
        ]),
    ) );

