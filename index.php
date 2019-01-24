<?php
get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <div class="hero">
                <div class="hero__overlay hero__overlay--gradient"></div>
                <div class="hero__mask"></div>
                <div class="hero__inner">
                    <div class="container">
                        <div class="hero__content">
                            <div class="hero__content__inner" id='navConverter'>
                                <h1 class="hero__title"><?php _e( 'A production-ready theme for your projects', 'jan19' ); ?></h1>
                                <p class="hero__text"><?php _e( 'Evie is an MIT licensed template bundled with a minimal style guide to build websites faster. It is extemely lightweight, customizable and works perfectly on modern browsers.', 'jan19' ); ?></p>
                                <a href="#" class="button button__accent"><?php echo get_field( null ); ?></a>
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
            <div class="cta cta--reverse">
                <div class="container">
                    <div class="cta__inner">
                        <h2 class="cta__title"><?php _e( 'Get started now', 'jan19' ); ?></h2>
                        <p class="cta__sub cta__sub--center"><?php _e( 'Grab the production version and begin your project instantly.', 'jan19' ); ?></p>
                        <a href="#" class="button button__accent"><?php _e( 'Download Evie', 'jan19' ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>