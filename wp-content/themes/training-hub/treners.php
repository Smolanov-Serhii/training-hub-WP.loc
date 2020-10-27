<?php
/**

 * Template Name: Тренера
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package training-hub
 */


?>

<?php
get_header();
?>

<article id="trenners" <?php post_class(); ?>>
    <?php training_hub_post_thumbnail(); ?>
    <header class="entry-header container">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="trenners__content container">
        <section class="trenners">
            <div class="trenners__page">
                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
            <ul class="trenners__list">
                <?php
                $args = array(
                    'post_type' => 'treners',
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
                        $post_id = get_the_ID();
                        $meta_values = get_post_meta($post_id, $key = 'ssylka_dlya_knopki_glavnogo_slajdera', true);
                        ?>

                        <li class="trenners__item">
                            <div class="trenners__person-cont">
                                <div class="trenners__person-cont-photo">
                                    <?php the_post_thumbnail();?>
                                </div>
                                <div class="trenners__pers-wrapper">
                                    <div class="trenners__person-cont-name">
                                        <?php the_field('fio_trenera');?>
                                    </div>
                                    <div class="trenners__person-work">
                                        <?php the_field('opisanie_dolzhnosti');?>
                                    </div>
                                    <div class="trenners__person-desk">
                                        <?php the_field('opisanie_trenera');?>
                                    </div>
                                </div>

                            </div>
                            <?php
                            if ( !empty ($meta_values[url])) {
                                echo "<a class='trenners__more' href='".$meta_values[url]."'>Подробнее ...</a>";
                            }

                            ?>
                            <div class="trenners__title">
                                <?php the_title();?>
                            </div>
                            <div class="trenners__desc">
                                <?php the_content();?>
                            </div>
                        </li>
                    <?php }
                }
                wp_reset_query(); ?>
            </ul>
        </section>
    </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->



<?php
get_footer();
?>
