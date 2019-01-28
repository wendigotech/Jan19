<div class="hero">
            <div class="hero__overlay hero__overlay--gradient"></div>
            <div class="hero__mask"></div>
            <div class="hero__inner">
                <div class="container-fluid">
                    <div class="hero__content">
                        <div class="hero__content__inner" id='navConverter'>
                            <h1 class="hero__title"><?php _e( 'A production-ready theme for your projects', 'jan19' ); ?></h1><div class="blog-slider">
                                <?php
                            $slider_args = array(
                                'tag' => 'slider'
                            )
                        ?><?php $slider = new WP_Query( $slider_args ); ?><?php if ( $slider->have_posts() ) : ?><div class="blog-slider__wrp swiper-wrapper">
                                    <?php while ( $slider->have_posts() ) : $slider->the_post(); ?><div class="blog-slider__item swiper-slide">
                                        <div class="blog-slider__img">
                                            <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'normal' );
                                                }
                                             ?>
                                        </div>
                                        <div class="blog-slider__content"><?php the_content(); ?></div>
                                    </div><?php endwhile; ?><?php wp_reset_postdata(); ?>
                                    
                                    
                                </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                                <div class="blog-slider__pagination"></div>
                            </div>
                            <p class="hero__text"><?php the_content(); ?></p>
                            
                            <a href="#" class="button button__accent"><?php _e( 'Download Evie', 'jan19' ); ?></a>
                            <a href="#" class="button hero__button"><?php _e( 'Learn more', 'jan19' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>