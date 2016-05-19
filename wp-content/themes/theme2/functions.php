<?php

/**
 * Меню
 */

register_nav_menu('menu' , 'Primary Menu');

/**
 * Слайдер
 */
register_sidebar(array(
    'name' => 'Слайдер на главной странице',
    'id' => 'slider_index',
    'description'=>'добавьте слайдер через виджет текст',
    'before_widget'=>'',
    'after_widget'=>''));


/**
 * Футер
 */
register_sidebar(array(
    'name' => 'Футер',
    'id' => 'footer',
    'description'=>'добавьте ссылки на соц сети через виджет текст',
    'before_widget'=>'',
    'after_widget'=>''));

/**
 * Миниатюры
 */
add_theme_support('post-thumbnails');

?>