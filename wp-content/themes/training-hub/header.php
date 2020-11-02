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
    <link href="<?php echo get_template_directory_uri() . '/style_ext/style.css'?>" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section class="modal-contact" style="display: none">
    <div class="modal-contact__fade">

    </div>
    <div class="modal-contact__keeper">
        <div class="modal-contact__keeper-wrapper">
            <?php echo do_shortcode('[contact-form-7 id="76" title="Оставить заявку"]'); ?>
            <svg class="modal-contact__close" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.24 7.93018L14.9362 13.2327L9.63371 7.93018L7.86621 9.69768L13.1687 15.0002L7.86621 20.3027L9.63371 22.0702L14.9362 16.7677L20.24 22.0702L22.0075 20.3027L16.705 15.0002L22.0075 9.69768L20.24 7.93018Z" fill="#23C4D2"/>
            </svg>
        </div>
    </div>


</section>

<?php wp_body_open(); ?>
    <header>
        <div class="contact-section container">
            <div class="contact-section__logo">
                <?php
                the_custom_logo();
                ?>
            </div>
            <div class="contact-section__btn">
                <span class="contact-section__btn-title">Оставить заявку</span>
                <svg width="441" height="441" viewBox="0 0 441 441" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M219.9 440.3C98.3 440.3 0 341.7 0 219.9C0 98.4 98.6 0 220 0C342 0 440.4 98.5 440.3 220.7C440.2 342 341.6 440.3 219.9 440.3ZM421.1 220.1C421.1 109.6 331.2 19.4 221 19.3C109.6 19.3 19.4 109 19.4 220C19.4 330.9 109.4 421 220.2 421C331.1 421 421.1 331 421.1 220.1Z" fill="white"/>
                    <path d="M421.1 220.1C421.1 331.1 331.1 421.1 220.2 421C109.4 421 19.4004 330.9 19.4004 220C19.4004 109 109.6 19.3 221 19.3C331.2 19.3 421.1 109.6 421.1 220.1ZM220 343.3C220 343.3 220 343.2 220 343.3C258.6 343.2 297.3 343.2 335.9 343.2C342.3 343.2 343.2 342.4 343.2 336C343.2 292.5 343.2 249 343.2 205.6C343.2 199.1 342.3 198.2 335.6 198.2C258.6 198.2 181.7 198.1 104.7 198.1C97.9004 198.1 97.0004 199 97.0004 205.9C97.0004 249 97.0004 292.2 97.0004 335.3C97.0004 342.6 97.6004 343.2 105 343.2C143.4 343.3 181.7 343.3 220 343.3ZM255 141.4C255.1 141.8 255.3 142.1 255.4 142.5C244 151.3 232.5 160.2 221.1 169C218.8 170.8 216.2 172.8 218.5 175.9C220.8 179 223.4 177.4 225.8 175.5C240.3 164.3 254.8 153.1 269.2 141.9C273.6 138.4 273.6 136.4 269.2 132.9C254.7 121.7 240.2 110.5 225.8 99.2C223.4 97.4 220.8 95.5 218.5 98.7C216.2 101.8 218.6 103.8 221 105.7C231.2 113.5 241.3 121.4 251.4 129.2C252.7 130.2 253.9 131.3 256.1 133.2C252.8 133.2 251 133.2 249.2 133.2C224.2 133.2 199.2 133.2 174.3 133.2C171.3 133.2 168.2 133.4 168.1 137.3C168 141.3 171.2 141.3 174.2 141.3C193.4 141.3 212.5 141.3 231.7 141.3C239.4 141.4 247.2 141.4 255 141.4Z" fill="#F4902F"/>
                    <path d="M220 343.3C181.7 343.3 143.4 343.3 105.1 343.3C97.6996 343.3 97.0996 342.7 97.0996 335.4C97.0996 292.3 97.0996 249.1 97.0996 206C97.0996 199.1 97.9996 198.2 104.8 198.2C181.8 198.2 258.7 198.3 335.7 198.3C342.4 198.3 343.3 199.2 343.3 205.7C343.3 249.2 343.3 292.7 343.3 336.1C343.3 342.5 342.5 343.3 336 343.3C297.3 343.2 258.7 343.2 220 343.3C220 343.3 220 343.2 220 343.3ZM335 211.3C332.7 213.1 331.1 214.3 329.6 215.5C294 244.4 258.4 273.2 223 302.3C218.7 305.8 216 305.5 211.9 302C178.1 273.1 144.1 244.4 110.2 215.6C108.9 214.5 107.5 213.5 105.6 212C105.6 253.3 105.6 293.8 105.6 334.6C182.2 334.6 258.6 334.6 335 334.6C335 293.6 335 253 335 211.3ZM217.6 296.2C254.3 266.4 290.8 236.8 327.9 206.6C255.6 206.6 184.4 206.6 112.1 206.6C147.8 236.9 182.7 266.5 217.6 296.2Z" fill="white"/>
                    <path d="M255 141.4C247.2 141.4 239.4 141.4 231.6 141.4C212.4 141.4 193.3 141.4 174.1 141.4C171.1 141.4 168 141.4 168 137.4C168.1 133.5 171.2 133.3 174.2 133.3C199.2 133.3 224.2 133.3 249.1 133.3C250.9 133.3 252.7 133.3 256 133.3C253.8 131.4 252.6 130.3 251.3 129.3C241.2 121.4 231 113.6 220.9 105.8C218.5 104 216.1 101.9 218.4 98.8C220.7 95.6 223.3 97.4 225.7 99.3C240.2 110.5 254.7 121.7 269.1 133C273.5 136.4 273.5 138.5 269.1 142C254.6 153.2 240.1 164.4 225.7 175.6C223.3 177.5 220.6 179.1 218.4 176C216.1 172.9 218.7 170.9 221 169.1C232.5 160.3 243.9 151.4 255.3 142.6C255.2 142.1 255.1 141.7 255 141.4Z" fill="white"/>
                    <path d="M335 211.3C335 252.9 335 293.6 335 334.6C258.6 334.6 182.2 334.6 105.6 334.6C105.6 293.9 105.6 253.3 105.6 212C107.4 213.4 108.9 214.4 110.2 215.6C144.1 244.4 178.1 273.1 211.9 302C215.9 305.5 218.7 305.8 223 302.3C258.4 273.2 294 244.4 329.6 215.5C331.1 214.3 332.7 213.1 335 211.3Z" fill="#F4902F"/>
                    <path d="M217.6 296.2C182.6 266.5 147.8 237 112.1 206.6C184.5 206.6 255.6 206.6 327.9 206.6C290.8 236.8 254.3 266.4 217.6 296.2Z" fill="#F4902F"/>
                </svg>
            </div>
            <div class="contact-section__contacts">
                <a href="tel:<?php echo get_theme_mod('phone'); ?>"><?php echo get_theme_mod('phone'); ?></a>
                <a href="<?php echo get_theme_mod('phone_2'); ?>"><?php echo get_theme_mod('phone_2'); ?></a>
                <a href="mailto:<?php echo get_theme_mod('e-mail'); ?>"><?php echo get_theme_mod('e-mail'); ?></a>
            </div>
        </div>
        <div class="primary-menu">
            <div class="primary-menu__burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="primary-menu__fade" style="display: none"></div>
            <div class="primary-menu__wrapper container">
                <div class="primary-menu__logo-mobile">
                    <?php
                    the_custom_logo();
                    ?>
                    <svg class="menu-header__close" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M20.24 7.93018L14.9362 13.2327L9.63371 7.93018L7.86621 9.69768L13.1687 15.0002L7.86621 20.3027L9.63371 22.0702L14.9362 16.7677L20.24 22.0702L22.0075 20.3027L16.705 15.0002L22.0075 9.69768L20.24 7.93018Z" fill="#000000"></path> </svg>
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
                <div class="language-switch">
                    <?php echo do_shortcode('[gtranslate]'); ?>
                </div>
            </div>
        </div>
    </header>
