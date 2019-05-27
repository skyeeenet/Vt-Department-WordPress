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
	) );
