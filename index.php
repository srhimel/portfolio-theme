<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sahahamar
 */

get_header();
?>
    <section class="page-blog-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="page-all-blog">
                        <div class="row justify-content-center">
                            <?php while(have_posts()): the_post() ?>
                            <div class="col-lg-6 col-sm-6 col-12">
                                
                                <div class="single-related-article">
                                    <div class="img"><a href="<?php the_permalink(); ?>"><?php shahamar_post_thumbnail(); ?></a>
                                    </div>
                                    <div class="content">
                                        <p class="date"><?php the_date(); ?></p>
                                        <a href="<?php the_permalink(); ?>"><h4 class="title"><?php the_title(); ?></h4></a>
                                        <p class="text"><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2 col-12">
                    <div class="sidebar">
                    <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
