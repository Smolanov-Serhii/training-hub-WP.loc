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
                    <svg width="167" height="166" viewBox="0 0 167 166" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M89.2968 165.684C85.5989 165.684 81.9912 165.684 78.2933 165.684C76.3091 165.413 74.3249 165.233 72.4308 164.962C56.106 162.617 41.585 156.033 29.2286 145.12C14.2567 131.862 5.05706 115.266 1.90032 95.4239C1.53955 93.0789 1.26897 90.7339 0.908203 88.3889C0.908203 84.691 0.908203 81.0833 0.908203 77.3854C1.17878 75.4012 1.35917 73.417 1.62974 71.5229C5.05706 49.6062 15.2488 31.6578 32.5658 17.9486C50.965 3.4276 71.9799 -2.25453 95.1593 0.812016C117.076 3.78837 135.024 14.1605 148.734 31.4775C163.345 49.8767 168.937 70.8916 165.96 94.1612C163.796 110.576 157.122 125.007 146.208 137.363C132.95 152.426 116.355 161.535 96.422 164.692C93.9868 165.053 91.6418 165.323 89.2968 165.684ZM145.036 82.8872C145.036 49.2454 117.527 21.6465 83.8853 21.6465C50.2435 21.6465 22.7348 49.065 22.6446 82.7068C22.5544 116.349 50.0631 143.947 83.7049 144.038C117.347 144.128 144.946 116.529 145.036 82.8872Z" fill="white"/>
                        <path d="M121.317 82.887C102.016 96.1453 83.0751 109.223 63.8641 122.391C63.8641 95.9649 63.8641 69.8091 63.8641 43.2925C82.9849 56.4606 102.016 69.6287 121.317 82.887Z" fill="white"/>
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
