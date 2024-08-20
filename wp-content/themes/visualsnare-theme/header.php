<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?></title>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a href="<?php echo home_url(); ?>"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/white-bridged-logo.svg"
                            alt='<?php echo get_bloginfo('name'); ?>' class="main-logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
                        aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hamburger-icon.svg"
                            alt="hamburger menu icon" />
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="main-menu">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'container' => false,
                                'menu_class' => '',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul class="navbar-nav mb-2 mb-md-0">%3$s</ul>',
                                'depth' => 3,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
            ?>
                    </div>
                </div>
            </nav>
        </header>