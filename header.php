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
                            <svg role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512">
                                <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path><svg role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512">
                                
                            </svg>
                            </svg>
                        </a>
                    </div>
                </div>
            </div><?php if ( is_active_sidebar( 'sidebar1' ) ) : ?><div class="col-md-4">
                    <?php dynamic_sidebar( 'sidebar1' ); ?>
                </div><?php endif; ?>
        </div>
        <!-- Hero unit -->
        <div>