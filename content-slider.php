<div class="blog-slider">
                                <?php
        $slider_args = array(
            'tag' => 'slider'
        )
    ?><?php $slider = new WP_Query( $slider_args ); ?><?php if ( $slider->have_posts() ) : ?><div <?php post_class( 'blog-slider__wrp swiper-wrapper' ); ?> id="post-<?php the_ID(); ?>">
                                    <?php $slider_item_number = 0; ?><?php while ( $slider->have_posts() && $slider_item_number++ < 3 ) : $slider->the_post(); ?><div class="blog-slider__item swiper-slide">
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