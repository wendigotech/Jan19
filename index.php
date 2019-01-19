<?php
get_header(); ?>

<!-- Hero(extended) navbar -->
<div class="navbar navbar--extended">
    <nav class="nav__mobile"></nav>
    <div class="container">
        <div class="navbar__inner">
            <a class="navbar__logo mt-3">
                <img src="file:///E:/GoogleOne/Web_Design/Active%20projects/January19/Jan19/free_logo_2.png" width="60"/>
            </a>
            <nav class="navbar__menu ">
                <ul>
                    <li>
                        <a href="#"><?php _e( 'Option', 'jan19' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'Option 2', 'jan19' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'Option 2', 'jan19' ); ?></a>
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
<div class="hero">
    <div class="hero__overlay hero__overlay--gradient"></div>
    <div class="hero__mask"></div>
    <div class="hero__inner">
        <div class="container">
            <div class="hero__content">
                <div class="hero__content__inner" id='navConverter'>
                    <h1 class="hero__title"><?php _e( 'A production-ready theme for your projects', 'jan19' ); ?></h1>
                    <p class="hero__text"><?php _e( 'Evie is an MIT licensed template bundled with a minimal style guide to build websites faster. It is extemely lightweight, customizable and works perfectly on modern browsers.', 'jan19' ); ?></p>
                    <a href="#" class="button button__accent"><?php _e( 'Download Evie', 'jan19' ); ?></a>
                    <a href="#" class="button hero__button"><?php _e( 'Learn more', 'jan19' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hero__sub">
    <span id="scrollToNext" class="scroll"> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class='hero__sub__down' fill="currentColor" width="512px" height="512px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path d="M256,298.3L256,298.3L256,298.3l174.2-167.2c4.3-4.2,11.4-4.1,15.8,0.2l30.6,29.9c4.4,4.3,4.5,11.3,0.2,15.5L264.1,380.9c-2.2,2.2-5.2,3.2-8.1,3c-3,0.1-5.9-0.9-8.1-3L35.2,176.7c-4.3-4.2-4.2-11.2,0.2-15.5L66,131.3c4.4-4.3,11.5-4.4,15.8-0.2L256,298.3z"/>
        </svg> </span>
</div>
<!-- Steps -->
<div class="steps landing__section">
    <div class="container">
        <h2><?php _e( 'Who can use Evie?', 'jan19' ); ?></h2>
        <p><?php _e( 'Here\'s who we can think of, but surely creative people will surprise us.', 'jan19' ); ?></p>
    </div>
    <div class="container">
        <div class="steps__inner">
            <div class="step">
                <div class="step__media">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/undraw_designer.svg" class="step__image">
                </div>
                <h4><?php _e( 'Programmers', 'jan19' ); ?></h4>
                <p class="step__text"><?php _e( 'A landing page for your open source projects. Present your solution, easily create docs.', 'jan19' ); ?></p>
            </div>
            <div class="step">
                <div class="step__media">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/undraw_responsive.svg" class="step__image">
                </div>
                <h4><?php _e( 'Designers', 'jan19' ); ?></h4>
                <p class="step__text"><?php _e( 'A website for your own freebies. Let the world download and use your artwork.', 'jan19' ); ?></p>
            </div>
            <div class="step">
                <div class="step__media">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/undraw_creation.svg" class="step__image">
                </div>
                <h4><?php _e( 'Makers', 'jan19' ); ?></h4>
                <p class="step__text"><?php _e( 'A great starting point for your web application. Focus on your idea and execution.', 'jan19' ); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- Expanded sections -->
<div class="expanded landing__section">
    <div class="container">
        <div class="expanded__inner">
            <div class="expanded__media">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/undraw_browser.svg" class="expanded__image">
            </div>
            <div class="expanded__content">
                <h2 class="expanded__title"><?php _e( 'Natural styling with almost nothing to learn', 'jan19' ); ?></h2>
                <p class="expanded__text"><?php _e( 'Evie brings you the pages you\'ll need and the structure to create your own, without a learning curve. It is minimal and mostly styles plain elements. There are only a few classes you\'ll need to know but nothing to disrupt your preferred coding style.', 'jan19' ); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="expanded landing__section">
    <div class="container">
        <div class="expanded__inner">
            <div class="expanded__media">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/undraw_frameworks.svg" class="expanded__image">
            </div>
            <div class="expanded__content">
                <h2 class="expanded__title"><?php _e( 'Framework agnostic. Your front-end setup, your choice.', 'jan19' ); ?></h2>
                <p class="expanded__text"><?php _e( 'Evie has zero dependencies and uses vanilla JavaScript for a few functions with minimal footprint. You can use React, Vue, Angular, jQuery or whatever you prefer.', 'jan19' ); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="expanded landing__section">
    <div class="container">
        <div class="expanded__inner">
            <div class="expanded__media">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/together.svg" class="expanded__image">
            </div>
            <div class="expanded__content">
                <h2 class="expanded__title"><?php _e( 'Ready for production or rapid prototyping', 'jan19' ); ?></h2>
                <p class="expanded__text"><?php _e( 'Landing, authentication and a few other pages to select from, despite the small size. Tested on production at unDraw with amazing speeds and unopinionated on how to structure your project. We really hope you\'ll find it awesome and useful!', 'jan19' ); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- Call To Action -->
<div class="cta cta--reverse">
    <div class="container">
        <div class="cta__inner">
            <h2 class="cta__title"><?php _e( 'Get started now', 'jan19' ); ?></h2>
            <p class="cta__sub cta__sub--center"><?php _e( 'Grab the production version and begin your project instantly.', 'jan19' ); ?></p>
            <a href="#" class="button button__accent"><?php _e( 'Download Evie', 'jan19' ); ?></a>
        </div>
    </div>
</div>
<!-- Footer -->
<div class="footer footer--dark">
    <div class="container">
        <div class="footer__inner">
            <a href="index.html" class="footer__textLogo"><?php _e( 'Evie theme', 'jan19' ); ?></a>
            <div class="footer__data">
                <div class="footer__data__item">
                    <div class="footer__row">
                        <?php _e( 'Created by', 'jan19' ); ?> 
                        <a href="https://twitter.com/ninalimpi" target="_blank" class="footer__link"><?php _e( 'Katerina Limpitsouni', 'jan19' ); ?></a>
                    </div>
                    <div class="footer__row">
                        <?php _e( 'Code/design by', 'jan19' ); ?> 
                        <a href="https://twitter.com/anges244" target="_blank" class="footer__link"><?php _e( 'Aggelos Gesoulis', 'jan19' ); ?></a>
                    </div>
                </div>
                <div class="footer__data__item">
                    <div class="footer__row">
                        <?php _e( 'Created for', 'jan19' ); ?> 
                        <a href="https://undraw.co" target="_blank" class="footer__link"><?php _e( 'unDraw', 'jan19' ); ?></a>
                    </div>
                    <div class="footer__row">
                        <?php _e( 'Special thx to', 'jan19' ); ?> 
                        <a href="https://shareboost.co" target="_blank" class="footer__link"><?php _e( 'ShareBoost', 'jan19' ); ?></a> 
                        <?php _e( 'for the support', 'jan19' ); ?>
                    </div>
                </div>
                <div class="footer__data__item">
                    <div class="footer__row">
                        <a href="https://github.com/anges244/evie" target="_blank" class="footer__link"><?php _e( 'GitHub', 'jan19' ); ?></a>
                    </div>
                    <div class="footer__row">
                        <a href="https://twitter.com/undraw_co" target="_blank" class="footer__link"><?php _e( 'Twitter', 'jan19' ); ?></a>
                    </div>
                    <div class="footer__row">
                        <a href="https://www.facebook.com/undraw.co/" target="_blank" class="footer__link"><?php _e( 'Facebook', 'jan19' ); ?></a>
                    </div>
                    <div class="footer__row">
                        <a href="./additional.html" class="footer__link"><?php _e( 'MIT license', 'jan19' ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>