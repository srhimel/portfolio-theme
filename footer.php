<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sahahamar
 */

?>

<section class="social-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <p class="intro">SOCIAL MEDIA</p>
                        <h2 class="title">Let’s Be Friends</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single-social">
                        <h3 class="title">Linkedin</h3>
                        <p class="info">Professional social profile</p>
                        <span class="icon"><i class="fab fa-linkedin-in"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single-social">
                        <h3 class="title">Github</h3>
                        <p class="info">Version controlling profile</p>
                        <span class="icon"><i class="fab fa-github"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single-social">
                        <h3 class="title">Instagram</h3>
                        <p class="info">Image base social communications</p>
                        <span class="icon"><i class="fab fa-instagram"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single-social">
                        <h3 class="title">Twitter</h3>
                        <p class="info">Random thoughts</p>
                        <span class="icon"><i class="fab fa-twitter"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single-social">
                        <h3 class="title">Facebook</h3>
                        <p class="info">Here i post my day</p>
                        <span class="icon"><i class="fab fa-facebook-f"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single-social">
                        <h3 class="title">Email</h3>
                        <p class="info">himusr@gmail.com</p>
                        <span class="icon"><i class="far fa-envelope"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer-top-area">
                <div class="row">
                    <div class="col-lg-4 col-sm-3 col-12">
                        <div class="f-logo">
                            <a href="<?php echo home_url(); ?>" class="link"><img src="<?php echo get_template_directory_uri().'/img/logo.png'?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-5 col-12">
                        <div class="f-title">
                            <h2 class="title">Let’s Talk?</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-12">
                        <div class="f-chat">
                            <a href="#" class="link btn-style-1">LET’S CHAT</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="footer-links">
                    <ul class="links">
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">WORKS</a></li>
                        <li><a href="#">CASE STUDY</a></li>
                        <li><a href="#">CLIENTS</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </div>
                <div class="footer-copyright">
                    <p class="copyright">© 2019 Shahamar Rahman Himel. Made with <i style="color: #FC2425;" class="fas fa-heart"></i> and some <i class="fas fa-code"></i></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
	<script>new WOW().init();</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
        var ml4 = {};
        ml4.opacityIn = [0,1];
        ml4.scaleIn = [0.2, 0.9];
        ml4.scaleOut = 1;
        ml4.durationIn = 800;
        ml4.durationOut = 600;
        ml4.delay = 500;

        anime.timeline({loop: true})
        .add({
            targets: '.ml4 .letters-1',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-1',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4 .letters-2',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-2',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4 .letters-3',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-3',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4 .letters-4',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-4',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4',
            opacity: 0,
            duration: 500,
            delay: 500
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
