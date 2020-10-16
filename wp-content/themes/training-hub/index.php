<?php
/**
 * The main template file
 * Template Name: Главная
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package training-hub
 */


?>

<?php
get_header();
?>


    <section class="header-slider">
        <ul class="header-slider__list">
            <?php
            $args = array(
                'post_type' => 'top-slider',
                'showposts' => "", //сколько показать статей
                'orderby' => "data", //сортировка по дате
                'caller_get_posts' => 1);
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    ?>
                    <?php
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

                    ?>
                    <li class="header-slider__item" style="background-image: url('<?php echo $thumb_url[0];?>')">
                        <div class="header-slider__title container">
                            <?php the_title();?>
                        </div>
                        <div class="header-slider__desc container">
                            <?php the_content();?>
                        </div>
                        <a href="<?php the_permalink();?>" class="header-slider__more">
                            Подробнее ...
                        </a>
                    </li>
                <?php }
            }
            wp_reset_query(); ?>
        </ul>
    </section>
    <section class="start-date container">
        <?php
        $args = array(
            'post_type' => 'startevent',
            'showposts' => "", //сколько показать статей
            'orderby' => "data", //сортировка по дате
            'caller_get_posts' => 1);
        $my_query = new wp_query($args);
        if ($my_query->have_posts()) {
            while ($my_query->have_posts()) {
                $my_query->the_post();
                ?>
                <div class="start-date__digit">
                    <div class="start-date__date">
                        <?php the_field('data_nachala_intensiva') ?>
                    </div>
                    <div class="wp-block-urc-block-uji-countdown-2020"><?php echo do_shortcode('[ujicountdown id="do-nachala-kursa" expire="2020-10-31 12:01"  hide="false" url="" subscr="undefined"" recurring="" rectype="" repeats=""]'); ?></div>
                    <div class="start-date__timer">

                    </div>
                </div>
                <div class="start-date__description">
                    <div class="start-date__desc-title">
                        <?php the_field('zagolovok_nachalo_intensiva') ?>
                    </div>
                    <div class="start-date__desc-subtitle">
                        <?php the_field('mesyacz_nachala_intensiva') ?>
                    </div>
                    <div class="start-date__read-more">
                        <svg width="145" height="126" viewBox="0 0 145 126" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                                <rect x="76" y="1" width="68" height="68" stroke="#C4C4C4" stroke-width="2"/>
                                <rect x="1" y="33" width="92" height="92" stroke="#C4C4C4" stroke-width="2"/>
                            </g>
                        </svg>
                        <a class="start-date__lnk" href="<?php the_permalink(); ?>">Ознакомиться с программой курса.</a>
                    </div>
                </div>
            <?php }
        }
        wp_reset_query(); ?>
    </section>
    <section class="acardeon">
        <ul class="acardeon__list">
                <?php
                $counter = 0;
                $class = '';
                $args = array(
                    'post_type' => 'trenings',
//                        'category__in' => 3, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                    'showposts' => "", //сколько показать статей
                    'orderby' => "", //сортировка по дате
                    'caller_get_posts' => 1);
                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) {
                        $counter++;
                        $my_query->the_post();
                        $alt = $image['alt'] ?>
                        <li class="acardeon__item <?php if ( $counter == 1 ) echo 'active';?>">
                            <?php
                            $meta_value = the_field('5dney');
                            if (!empty( $meta_value )){
                                the_field('5dney');
                            }?>
                            <div class="acardeon__title-closed">
                                <?php the_title(); ?>
                            </div>
                            <div class="acardeon__title">
                                <?php the_title(); ?>
                            </div>
                            <div class="acardeon__desc">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<? the_permalink();?>" class="acardeon__lnk">
                                Подробнее...
                            </a>
                            <?php echo get_the_post_thumbnail();?>
                        </li>
                    <?php }
                }
                wp_reset_query(); ?>
        </ul>
    </section>
    <div class="container-grey">
        <section class="fullcycle container">
            <?php
            $counter = 0;
            $class = '';
            $args = array(
                'post_type' => 'fullcicle',
//                        'category__in' => 3, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                'showposts' => "", //сколько показать статей
                'orderby' => "", //сортировка по дате
                'caller_get_posts' => 1);
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $counter++;
                    $my_query->the_post();
                    $alt = $image['alt'] ?>
                    <div class="fullcycle__title">
                        <?php the_title();?>
                    </div>
                    <div class="fullcycle__content">
                        <div class="fullcycle__image">
                            <?php
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

                            ?>
                            <img class="fullcycle__img-item" src="<?php echo $thumb_url[0];?>" alt="<?php the_title(); ?>">
                        </div>
                        <div class="fullcycle__desc">
                            <?php the_content();?>
                        </div>
                    </div>
                <?php }
            }
            wp_reset_query(); ?>
        </section>
    </div>
    <section class="counter container">
        <div class="counter__item">
            <canvas class="round-counter my-canv" width="270" height="270" data-value="3000" data-color="F4902F"></canvas>
            <span class="counter__item-text" style="color: #F4902F">часов обучения</span>
        </div>
        <div class="counter__item">
            <canvas class="round-counter my-canv" width="270" height="270" data-value="7" data-color="468388"></canvas>
            <span class="counter__item-text" style="color: #468388">лет в сфере обучения</span>
        </div>
        <div class="counter__item">
            <canvas class="round-counter my-canv" width="270" height="270" data-value="4000" data-color="000000"></canvas>
            <span class="counter__item-text" style="color: #000000">участников обучения</span>
        </div>
    </section>
    <section class="events">
        <div class="events__container">
            <div class="events__select">
                <ul class="events__select-list">
                    <?php
                    $counter = 0;
                    $class = '';
                    $args = array(
                        'post_type' => 'trenings',
                        'showposts' => "", //сколько показать статей
                        'orderby' => "", //сортировка по дате
                        'caller_get_posts' => 1);
                    $my_query = new wp_query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) {
                            $counter++;
                            $my_query->the_post();
                            $alt = $image['alt'] ?>
                            <li class="events__select-item">
                                <div class="item-title">
                                    <?php the_title();?>
                                </div>
                                <div class="item-date">
                                    <?php the_field('data_dlya_slajdera_sobytij');?>
                                </div>
                            </li>
                        <?php }
                    }
                    wp_reset_query(); ?>
                </ul>
            </div>
            <ul class="events__slide">
                <?php
                $counter = 0;
                $class = '';
                $args = array(
                    'post_type' => 'trenings',
                    'showposts' => "", //сколько показать статей
                    'orderby' => "", //сортировка по дате
                    'caller_get_posts' => 1);
                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) {
                        $counter++;
                        $my_query->the_post();
                        $alt = $image['alt'] ?>
                        <li class="events__slide-item" style="background-image: url('<?php echo the_field('kartinka_dlya_verhva_straniczy_treninga')?>')" ">
                        <div class="slide-fader"></div>
                            <?php
                            $meta_value = the_field('5dney');
                            if (!empty( $meta_value )){
                                the_field('5dney');
                            }?>
                        </li>
                    <?php }
                }
                wp_reset_query(); ?>
            </ul>
        </div>

    </section>
    <section class="text-only container">

        <?php
        $content = get_the_content('читать далее');
        echo apply_filters( 'the_content', $content );
        ?>

    </section>
    <section class="main-video container">
        <a href="<?php echo (get_post_meta($post->ID, 'ssylka_na_video_s_yutuba', true)); ?>" class="fresco main-video__fresco">
            <img class="main-video__cover" src="<?php the_field('vyberite_oblozhku_video', $postID); ?>" alt="">
            <div class="main-video__play-btn">
                <svg width="166" height="166" viewBox="0 0 166 166" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M88.2968 165.684C84.5989 165.684 80.9912 165.684 77.2933 165.684C75.3091 165.413 73.3249 165.233 71.4308 164.962C55.106 162.617 40.585 156.033 28.2286 145.12C13.2567 131.861 4.05706 115.266 0.90032 95.4237C0.53955 93.0787 0.268973 90.7337 -0.0917969 88.3887C-0.0917969 84.6908 -0.0917969 81.0831 -0.0917969 77.3852C0.178781 75.401 0.359166 73.4167 0.629743 71.5227C4.05706 49.6059 14.2488 31.6576 31.5658 17.9483C49.965 3.42735 70.9799 -2.25477 94.1593 0.811772C116.076 3.78812 134.024 14.1603 147.734 31.4772C162.345 49.8765 167.937 70.8913 164.96 94.161C162.796 110.576 156.122 125.007 145.208 137.363C131.95 152.425 115.355 161.535 95.422 164.692C92.9868 165.052 90.6418 165.323 88.2968 165.684ZM144.036 82.8869C144.036 49.2451 116.527 21.6462 82.8853 21.6462C49.2435 21.6462 21.7348 49.0648 21.6446 82.7066C21.5544 116.348 49.0631 143.947 82.7049 144.037C116.347 144.128 143.946 116.529 144.036 82.8869Z" fill="white"/>
                        <path d="M120.317 82.887C101.016 96.1453 82.0753 109.223 62.8643 122.391C62.8643 95.9649 62.8643 69.8091 62.8643 43.2925C81.9851 56.4606 101.016 69.6287 120.317 82.887Z" fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="165.684" height="165.684" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </a>

    </section>
    <section class="events-galery container">
        <div class="events-galery__title">
            <?php echo get_cat_name(3);?>
        </div>
        <ul class="events-galery__list">
            <?php
            global $post;
            $postslist = get_posts( array( 'posts_per_page' => 10, 'category'=>'galereya-sobytij' ) );
            foreach ( $postslist as $post ){
                setup_postdata($post);
                ?>
                <div>
                    <li class="events-galery__item">
                        <a href="events-galery__lnk">
                            <?php the_post_thumbnail(); ?>
                            <div class="events-galery__date">
                                <?php the_date(); ?>
                            </div>
                            <div class="events-galery__item-title">
                                <?php the_title(); ?>
                            </div>
                            <div class="events-galery__item-desc">
                                <?php the_excerpt(); ?>
                            </div>
                        </a>
                    </li>
                </div>
                <?php
            }
            wp_reset_postdata();  ?>
        </ul>
        <div class="events-galery__nav">
            <div class="events-galery__prev">
                <svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 9L1 9M1 9L8.89873 17M1 9L8.89873 1" stroke="black"/>
                </svg>
            </div>
            <div class="events-galery__next">
                <svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 9L24 9M24 9L16.1013 1M24 9L16.1013 17" stroke="black"/>
                </svg>
            </div>
        </div>
    </section>
    <section class="recall">
        <div class="container">
            <div class="recall__title">
                ОТЗЫВЫ  О НАШЕЙ РАБОТЕ
            </div>
            <div class="recall__subtitle">
                It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.
            </div>
            <ul class="recall__list">
                <?php echo do_shortcode('[testimonial_view id="1"]'); ?>
            </ul>
            <div class="recall__nav">
                <div class="recall__prev">
                    <svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 9L1 9M1 9L8.89873 17M1 9L8.89873 1" stroke="black"/>
                    </svg>
                </div>
                <div class="recall__next">
                    <svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 9L24 9M24 9L16.1013 1M24 9L16.1013 17" stroke="black"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>



<?php
get_footer();
?>
