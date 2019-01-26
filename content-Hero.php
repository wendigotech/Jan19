<div class="hero">
            <div class="hero__overlay hero__overlay--gradient"></div>
            <div class="hero__mask"></div>
            <div class="hero__inner">
                <div class="container">
                    <div class="hero__content">
                        <?php
                    $hero_args = array(
                        'page_id' => 'hero'
                    )
                ?><?php $hero = new WP_Query( $hero_args ); ?><?php if ( $hero->have_posts() ) : ?><?php while ( $hero->have_posts() ) : $hero->the_post(); ?><div class="hero__content__inner" id='navConverter'>
                            <h1 class="hero__title"><?php the_title(); ?></h1>
                            <p class="hero__text"><?php the_content(); ?></p>
                            <p class="hero__text"><?php _e( 'Evie is an MIT licensed template bundled with a minimal style guide to build websites faster. It is extemely lightweight, customizable and works perfectly on modern browsers.', 'jan19' ); ?></p><p class="hero__text"><?php _e( 'Evie is an MIT licensed template bundled with a minimal style guide to build websites faster. It is extemely lightweight, customizable and works perfectly on modern browsers.', 'jan19' ); ?></p>
                            <a href="#" class="button button__accent"><?php _e( 'Download Evie', 'jan19' ); ?></a>
                            <a href="#" class="button hero__button"><?php _e( 'Learn more', 'jan19' ); ?></a>
                        </div><?php endwhile; ?><?php wp_reset_postdata(); ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>