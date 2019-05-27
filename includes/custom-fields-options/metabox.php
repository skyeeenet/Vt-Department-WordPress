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
