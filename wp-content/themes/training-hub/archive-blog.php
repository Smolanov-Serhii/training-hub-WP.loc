<?php
/**
 * The main template file
 * Template Name: Блог
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
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-12">
                    <div class="blog-posts-area">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-heading custom-header">
                                    <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                            <?php
                            if ( have_posts() ) : // если имеются записи в блоге.
                                query_posts('cat=4');   // указываем ID рубрик, которые необходимо вывести.
                            ?>

                            <?php
                                while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                                    ?>
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post mb-50">
                                            <!-- Thumbnail -->
                                            <div class="post-thumbnail">
                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                            </div>
                                            <!-- Content -->
                                            <div class="post-content">
                                                <p class="post-date"><?php the_date(); ?></p>
                                                <a href="<?php the_permalink(); ?>" class="post-title">
                                                    <h4><?php the_title(); ?></h4>
                                                </a>
                                                <div class="post-excerpt"><?php the_excerpt(); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;  // завершаем цикл.
                            endif;
                            /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>