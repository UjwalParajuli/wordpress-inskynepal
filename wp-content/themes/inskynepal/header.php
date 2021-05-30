<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php 
        if(is_front_page()) {
            bloginfo( 'description' );
        
        echo ' - ';
        bloginfo( 'name' );
        } else {
            wp_title('-', true, 'left');
        }?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Mulish:ital,wght@0,700;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header class="top-header">
            <div class="container">
                <div class="top-nav">
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="insky-logo">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/logo.jpg'?>" alt="Insky Logo" />
                    </a>

                    <div class="hamburger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>

                    <nav class="insky-navigation">
                        <?php
                            $args = array(
                                'theme_location' => 'header-menu',
                                'container' => 'nav',
                                'container_class' => 'insky-navigation',
                                'menu_class' => 'nav-links'
                            );
                            wp_nav_menu($args);
                        ?>
                    </nav>   
                </div>                     
            </div>
        </header>

        