<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <div id="top"></div>
    <main class="container">
        <header class="site-header">
            <div class="wrap">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'    => 'primary-menu',
                        'container' =>  'nav',
                        'container_class' => 'web_nav',
                    )
                );
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mobile_nav_open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <div class="mobile_nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'    => 'primary-menu',
                            'container' =>  'nav',
                            'menu_class' => 'mobile_nav_ul'
                        )
                    );
                    ?>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mobile_nav_close">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>
                <a class="site-title-link" href="/">
                    <h1 class="site-title"><?php bloginfo('title') ?></h1>
                </a>
            </div>
        </header>