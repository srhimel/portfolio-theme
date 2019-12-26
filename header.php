<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sahahamar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-4 col-5">
                    <div class="logo">
                        <?php if(has_custom_logo()): the_custom_logo(); 
                        
                        else:?>
                        <a href="<?php home_url(); ?> >" class="link"><img src="<?php echo get_template_directory_uri().'/img/logo.png'?>" alt=""></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-4 col-7">
                    <div class="main-menu stellarnav">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-1',
								'container'=> '',
								'menu_class'=> false, 
								'menu_id'=> 'ia_toplevel' 
                            ) );
                        ?>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-12 d-none d-sm-block">
                    <div class="lets-chat">
                        <a href="#" class="link btn-style-1">LET’S CHAT</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

