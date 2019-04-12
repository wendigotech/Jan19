<!doctype html>
<html <?php language_attributes(); ?>>
    <head><meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta class="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <!-- Don't forget to add your metadata here -->
        
        
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php wp_head(); ?></head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <!-- Hero(extended) navbar -->
        <div class="navbar navbar--extended">
            <nav class="nav__mobile"></nav>
            <div class="container">
                <div class="navbar__inner" style="width: 100%; justify-content: space-between;">
                    <a class="navbar__logo" href="<?php echo esc_url( get_home_url() ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/My-Casino-Time-logotype.png" class="img-fluid p-2" width="180"/>
                    </a>
                    <nav class="navbar__menu">
                        <?php if ( has_nav_menu( 'primary' ) ) : ?><?php wp_nav_menu( array(
                                    'menu' => 'primary',
                                    'container' => '',
                                    'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                    'walker' => new wp_bootstrap4_navwalker()
                            ) ); ?><?php endif; ?>
                    </nav>
                    <div class="navbar__menu-mob">
                        <a href="" id='toggle'>
                            
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero unit -->
        <div>