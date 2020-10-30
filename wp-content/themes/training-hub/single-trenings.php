<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pereedem.com.ua
 */
get_header();
?>



<body>
<?php ?>
    <main id="single-trainin" class="single-trainin">
        <div class="single-trainin__header-img">
            <img src="<?php the_field('kartinka_dlya_verhva_straniczy_treninga')?>" alt="<?php the_title();?>">
        </div>
        <h1 class="single-trainin__title container"><?php the_title();?></h1>
        <h2 class="single-trainin__date container"><?php the_field('data_provedeniya_treninga');?></h2>
        <div class="single-trainin__content container">
            <?php the_content();?>
        </div>
<!--        --><?php
//        while ( have_posts() ) :
//            the_post();
//
//            get_template_part( 'template-parts/content', get_post_type() );
//
//
//        endwhile; // End of the loop.
//        ?>
        <div class="single-trainin__having">
        <img class="single-trainin__having-img" src="<?php echo the_field('kartinka_plyushki_posle_kursa')?>">
            <div class="single-trainin__having-fade">
                <?php the_field('tekt_opisaniya_plyushki_posle_treninga');?>
            </div>
        </div>
        <div class="for-who">
            <div class="container">
                <div class="for-who__title">
                    <?php the_field('zagolovok_dlya_kogo');?>
                </div>
                <div class="for-who__content">
                    <?php the_field('opisanie_bloka_dlya_kogo');?>
                </div>
            </div>
        </div>
        <?php
        $post_id = get_the_ID();
        $oblozhka_dlya_video = get_post_meta($post_id, $key = 'oblozhka_dlya_video', true);
        if ( !empty ($oblozhka_dlya_video)) {?>
            <section class="main-video container">
            <a href="<?php echo (get_post_meta($post->ID, 'ssylka_na_video', true)); ?>" class="fresco main-video__fresco">
                <img class="main-video__cover" src="<?php the_field('oblozhka_dlya_video', $postID); ?>" alt="">
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
            <?php
        }
        ?>
        <div class="traning-days">
            <div class="container">
                <div class="traning-days__title">
                    <?php the_field('zagolovok_programma');?>
                </div>
                <ul class="traning-days__slide">
                    <?php
                    $post_id = get_the_ID();
                    $fivedney = get_post_meta($post_id, $key = '5dney', true);
                    $pervyj_den_prorammy = get_post_meta($post_id, $key = 'pervyj_den_prorammy', true);
                    $vtoroj_den_programmy = get_post_meta($post_id, $key = 'vtoroj_den_programmy', true);
                    $trpetij_den_programmy = get_post_meta($post_id, $key = 'trpetij_den_programmy', true);
                    $chetvyortyj_den_programmy = get_post_meta($post_id, $key = 'chetvyortyj_den_programmy', true);
                    $pyatyj_den_programmy = get_post_meta($post_id, $key = 'pyatyj_den_programmy', true);
                    if ( !empty ($pervyj_den_prorammy)) {
                        echo "<div class='traning-days__item pervyj_den_prorammy'>";
                        the_field('pervyj_den_prorammy');
                        echo "</div>";
                    }
                    if ( !empty ($vtoroj_den_programmy)) {
                        echo "<div class='traning-days__item vtoroj_den_programmy'>";
                        the_field('vtoroj_den_programmy');
                        echo "</div>";
                    }
                    if ( !empty ($trpetij_den_programmy)) {
                        echo "<div class='traning-days__item trpetij_den_programmy'>";
                        the_field('trpetij_den_programmy');
                        echo "</div>";
                    }
                    if ( !empty ($chetvyortyj_den_programmy)) {
                        echo "<div class='traning-days__item chetvyortyj_den_programmy'>";
                        the_field('chetvyortyj_den_programmy');
                        echo "</div>";
                    }
                    if ( !empty ($pyatyj_den_programmy)) {
                        echo "<div class='traning-days__item pyatyj_den_programmy'>";
                        the_field('pyatyj_den_programmy');
                        echo "</div>";
                    }
                    ?>
                </ul>
                <div class="traning-days__nav">
                    <div class="wrapper container">
                        <div class="traning-days__nav-prew">
                            <svg width="105" height="193" viewBox="0 0 105 193" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.741876 95.8129L96.5549 -3.11976e-05L103.626 7.07103L14.884 95.8129L104.333 185.262L97.2619 192.333L0.741876 95.8129Z" fill="black"/>
                            </svg>
                        </div>
                        <div class="traning-days__nav-next">
                            <svg width="105" height="193" viewBox="0 0 105 193" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M104.333 96.5201L8.51987 192.333L1.44881 185.262L90.1907 96.5201L0.741699 7.07107L7.81277 0L104.333 96.5201Z" fill="black"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="time-price">
            <div class="time-price__container container">
                <?php
                $post_id = get_the_ID();
                $czena_na_pervyj_period = get_post_meta($post_id, $key = 'czena_na_pervyj_period', true);
                $czena_na_vtoroj_period = get_post_meta($post_id, $key = 'czena_na_vtoroj_period', true);
                if ( !empty ($czena_na_vtoroj_period)) {
                    echo "<div class='time-price__item time-price__item-first'>
                            <div class='time-price__title'> Цена </div>
                            <div class='time-price__price'>";
                                the_field('czena_na_pervyj_period');
                                echo "</div>";
                                echo "<div class='time-price__desc'>";
                                the_field('opisanie_pervogo_perioda');
                                echo "</div>";
                                echo "</div>";
                }
                if ( !empty ($czena_na_vtoroj_period)) {
                    echo "<div class='time-price__item time-price__item-sec'>
                            <div class='time-price__title'> Цена </div>
                            <div class='time-price__price'>";
                    the_field('czena_na_vtoroj_period');
                    echo "</div>";
                    echo "<div class='time-price__desc'>";
                    the_field('opisanie_vtorogo_perioda');
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
        <div class="sertificate-people container">
            <ul class="sertificate-people__list">
                <?php
                $post_id = get_the_ID();
                $zagolovok_pervogo_sertifikata = get_post_meta($post_id, $key = 'zagolovok_pervogo_sertifikata', true);
                $zagolovok_vtorogo_sertifikata = get_post_meta($post_id, $key = 'zagolovok_vtorogo_sertifikata', true);
                if ( !empty ($zagolovok_pervogo_sertifikata)) {
                    echo "<li class='sertificate-people__item'>
                    <div class='sertificate-people__item-cont'>
                        <div class='sertificate-people__title'>";
                            the_field('zagolovok_pervogo_sertifikata');
                        echo "</div>
                        <div class='sertificate-people__desc'>";
                            the_field('dobavit_opisanie_pervogo_sertifikata');
                        echo "</div>
                    </div>
                    <div class='sertificate-people__img'>
                        <img src='";
                        the_field('kartinka_pervogo_sertifikata');
                        echo "' alt='"; the_field('zagolovok_pervogo_sertifikata');
                    echo "'></div>
                </li>";
                }
                if ( !empty ($zagolovok_vtorogo_sertifikata)) {
                    echo "<li class='sertificate-people__item'>
                    <div class='sertificate-people__item-cont'>
                        <div class='sertificate-people__title'>";
                    the_field('zagolovok_vtorogo_sertifikata');
                    echo "</div>
                        <div class='sertificate-people__desc'>";
                    the_field('opisanie_pervogo_sertifikata');
                    echo "</div>
                    </div>
                    <div class='sertificate-people__img'>
                        <img src='";
                        the_field('kartinka_vtorogo_sertifikata');
                        echo "' alt='"; the_field('zagolovok_vtorogo_sertifikata');
                    echo "'></div>
                </li>";
                }
                ?>
            </ul>
        </div>
        <div class="get-contact-form container">
            <div class="get-contact-form__button">
                <?php
                echo the_field('tekst_na_knopke_dlya_zapisi');
                ?>
            </div>
        </div>
    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
