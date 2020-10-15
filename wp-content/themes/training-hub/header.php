<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Training-Hub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header>
        <div class="contact-section container">
            <div class="contact-section__logo">
                <?php
                the_custom_logo();
                ?>
            </div>
            <div class="contact-section__btn">
                <span class="contact-section__btn-title">Оставить заявку</span>
            </div>
            <div class="contact-section__contacts">
                <a href="tel:+38 (097) 325 65 85">+38 (097) 325 65 85</a>
                <a href="tel:+38 (097) 325 65 85">+38 (097) 325 65 85</a>
                <a href="mailto:evgeniy@gmail.com">evgeniy@gmail.com</a>
            </div>
        </div>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'menu_id'        => 'main-menu',
                'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
                // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                'container'       => 'nav',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                'container_class' => 'main-nav',              // (string) class контейнера (div тега)
                'container_id'    => '',              // (string) id контейнера (div тега)
                'menu_class'      => 'main-nav__list container',          // (string) class самого меню (ul тега)
                'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                'before'          => '',              // (string) Текст перед <a> каждой ссылки
                'after'           => '',              // (string) Текст после </a> каждой ссылки
                'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
                'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
                'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
            )
        );
        ?>
    </header>
