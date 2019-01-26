<div class="hero">
            <div class="hero__overlay hero__overlay--gradient"></div>
            <div class="hero__mask"></div>
            <div class="hero__inner">
                <div class="container">
                    <div class="hero__content">
                        <?php
                    $hero_args = array(
                        'post_parent' => 'home',
                        'page_id' => 'hero',
                        'post_type' => 'page'
                    )
                ?><?php $hero = new WP_Query( $hero_args ); ?><?php if ( $hero->have_posts() ) : ?><?php $hero_item_number = 0; ?><?php while ( $hero->have_posts() && $hero_item_number++ < 1 ) : $hero->the_post(); ?><div class="hero__content__inner" id='navConverter'>
                            <h1 class="hero__title"><?php the_title(); ?></h1>
                            <p class="hero__text"><?php the_content(); ?></p>
                            
                            <a href="#" class="button button__accent"><?php _e( 'Download Evie', 'jan19' ); ?></a>
                            <a href="#" class="button hero__button"><?php _e( 'Learn more', 'jan19' ); ?></a>
                        </div><?php endwhile; ?><?php wp_reset_postdata(); ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>