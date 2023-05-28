<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>

    <body>

    <header>
        <div id="info">
            <?php
                $infoId = 5;
                $post = get_post($infoId);
                echo( $post->post_content );
            ?>
        </div>

        <div id="logo">
            <div id="logo-cover"></div>

            <?php
                $logoId = 8;
                $logo = get_post($logoId);
                echo( $logo->post_content );
            ?>
        </div>

        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </header>