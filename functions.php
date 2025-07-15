<?php
// Подключаем стили и скрипты темы через хуки WordPress
add_action('wp_enqueue_scripts', function() {
    // Регистрируем и подключаем основной CSS-файл (стили темы)
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css');
  
    // Удаляем стандартную версию jQuery из WordPress (чтобы подключить свою, если нужно)
    wp_deregister_script('jquery');
    
    // Подключаем основной JS-файл (скрипты темы)
    // Параметры: 
    // 1. 'script' — название скрипта,
    // 2. Путь к файлу,
    // 3. array() — зависимости (пустой массив, так как jQuery удалён),
    // 4. null — версия (не указываем),
    // 5. true — подключать в футере (а не в <head>)
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
});

// Включаем поддержку миниатюр (изображений) для записей и страниц
add_theme_support('post-thumbnails');

// Включаем автоматическое управление тегом <title> (SEO-оптимизация)
add_theme_support('title-tag');

// Включаем поддержку кастомного логотипа (через Настройки → Внешний вид)
add_theme_support('custom-logo');

// Включаем поддержку меню (регистрация областей меню делается отдельно через register_nav_menus())
add_theme_support('menus');
?>
