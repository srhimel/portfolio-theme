<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sahahamar
 */
get_header();
?>
<?php if ( !is_user_logged_in() ) { setPostViews(get_the_ID()); } ?>
<?php while(have_posts()): the_post() ?>
<section class="innerpage-hero-area" style="background: linear-gradient(
      rgba(58, 56, 68, 0.95), 
      rgba(58, 56, 68, 0.95)
    ), url('<?php the_post_thumbnail_url(); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-1 col-12">
                    <div class="innerpage-hero-content" >
                        <h2 class="title"><?php the_title(); ?></h2>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="iha-meta">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 offset-lg-1 col-12">
                        <div class="iha-all-meta">
                            <div class="iha-meta-box">
                                <p class="title">PUBLISH DATE</p>
                                <p class="info"><?php echo get_the_date(); ?></p>
                            </div>
                            <div class="iha-meta-box">
                                <p class="title">CATEGORIES</p>
                                <p class="info"><?php the_category(','); ?></p>
                            </div>
                            <div class="iha-meta-box">
                                <p class="title">POST VIEWS</p>
                                <p class="info"><?php echo getPostViews(get_the_ID()); ?> </p>
                            </div>
                            <div class="iha-meta-box">
                                <p class="title">SHARE</p>
                                <p class="info">Facebook</p>
                            </div>
                            <div class="iha-meta-box">
                                <p class="title"><span class="blank">d</span></p>
                                <p class="info">Twitter</p>
                            </div>
                            <div class="iha-meta-box">
                                <p class="title"><span class="blank">d</span></p>
                                <p class="info">Linkedin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="single-blog-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="sbpa-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
	</section>

	<?php endwhile; ?>	

<?php
get_footer();
