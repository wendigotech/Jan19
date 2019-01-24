<?php
get_header(); ?>

<!-- navbar -->
<div class="navbar navbar--extended">
    <nav class="nav__mobile"></nav>
    <div class="container">
        <div class="navbar__inner">
            <a href="#" class="navbar__logo"><?php _e( 'Logo', 'jan19' ); ?></a>
            <nav class="navbar__menu">
                <ul>
                    <li>
                        <a href="#"><?php _e( 'Option', 'jan19' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'Option 2', 'jan19' ); ?></a>
                    </li>
                </ul>
            </nav>
            <div class="navbar__menu-mob">
                <a href="" id='toggle'>
                    <svg role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512">
                        <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Hero unit -->
<div class="page__header">
    <div class="hero__overlay hero__overlay--gradient"></div>
    <div class="hero__mask"></div>
    <div class="page__header__inner">
        <div class="container">
            <div class="page__header__content">
                <div class="page__header__content__inner" id='navConverter'>
                    <h1 class="page__header__title"><?php _e( 'Multi-purpose page', 'jan19' ); ?></h1>
                    <p class="page__header__text"><?php _e( 'This is mostly a simple layout, rather than a complete page unlike the others. However this is a really useful starting point for anything you want to create.', 'jan19' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="page">
    <div class="container">
        <div class="page__inner">
            <div class="page__menu">
                <ul class="vMenu">
                    <li>
                        <a href="#" class="vMenu--active"><?php _e( 'Active page', 'jan19' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'Second page', 'jan19' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'Third page', 'jan19' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'Fourth page', 'jan19' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'Fifth page', 'jan19' ); ?></a>
                    </li>
                </ul>
            </div>
            <div class="page__main">
                <div class="text-container">
                    <h3 class="page__main__title"><?php _e( 'This is the main area', 'jan19' ); ?></h3>
                    <p><?php _e( 'Write or do whatever you want here!', 'jan19' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>        

<?php get_footer(); ?>