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
        <div class="single-trainin__having" style="background-image: url('<?php echo the_field('kartinka_plyushki_posle_kursa')?>')" ">
            <div class="ingle-trainin__having-fade">
                <?php the_field('tekt_opisaniya_plyushki_posle_treninga');?>
            </div>
        </div>
    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
