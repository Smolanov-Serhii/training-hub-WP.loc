<?php
/**

 * Template Name: Тренинги
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package training-hub
 */


?>

<?php
get_header();
?>

<article id="trenings" <?php post_class(); ?>>
    <div class="trenings__header-img">
        <?php the_post_thumbnail(); ?>
    </div>
    <header class="entry-header container">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="trenings__content container">
        <section class="trenings">
            <ul class="trenings__list">
                <?php
                $args = array(
                    'post_type' => 'trenings',
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
                        $text = get_the_content();
                        ?>
                        <li class="trenings__item">
                            <div class="trenings__image">
                                <img src="<?php the_field('oblozhka_dlya_treninga');?>" alt="<?php echo the_title(); ?>" />
                            </div>
                            <div class="trenings__container">
                                <div class="trenners__title">
                                    <?php the_title();?>
                                </div>
                                <div class="trenings__desc">
                                    <?php echo wp_trim_words( $text, 50, ' ...' );?>
                                </div>
                                <div class="trenings__more">
                                    <a href="<?php the_permalink();?>">Подробнее ...</a>
                                </div>
                            </div>
                        </li>
                    <?php }
                }
                wp_reset_query(); ?>
            </ul>
            <div class="trenings__page">
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
        </section>
    </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->



<?php
get_footer();
?>
