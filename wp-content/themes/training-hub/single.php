<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Training-Hub
 */

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
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">

            <!-- Blog Posts Area -->
                <div class="col-12">

                <!-- Post Details Area -->
                    <div class="single-post-details-area">
                        <div class="post-content">
                            <div class="text-center mb-50">
                                <date class="post-date"><?php the_date();?> / TRAINING-HUB</date>
                                <h1 class="post-title"><?php the_title();?></h1>
                            </div>
                            <div class="post-thumbnail mb-50">
                                <?php echo get_the_post_thumbnail();?>
                            </div>
                            <?php the_content();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
//get_sidebar();
get_footer();
