<div class="hero">
            <div class="hero__overlay hero__overlay--gradient"></div>
            <div class="hero__mask"></div>
            <div class="hero__inner">
                <div class="container-fluid">
                    <div class="hero__content">
                        <div class="hero__content__inner" id='navConverter'>
                            <h1 class="hero__title"><?php _e( 'A production-ready theme for your projects', 'jan19' ); ?></h1><div class="blog-slider">
                                <div class="blog-slider__wrp swiper-wrapper">
                                    <?php
                                $slider_args = array(
                                    'tag' => 'slider'
                                )
                            ?><?php $slider = new WP_Query( $slider_args ); ?><?php if ( $slider->have_posts() ) : ?><?php $slider_item_number = 0; ?><?php while ( $slider->have_posts() && $slider_item_number++ < 1 ) : $slider->the_post(); ?><div class="blog-slider__item swiper-slide">
                                        <div class="blog-slider__img">
                                            <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'normal' );
                                                }
                                             ?>
                                        </div>
                                        <div class="blog-slider__content"><?php the_content(); ?></div>
                                    </div><?php endwhile; ?><?php wp_reset_postdata(); ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                                    <?php if ( $slider->have_posts() ) : ?><?php $slider_item_number = 0; ?><?php while ( $slider->have_posts() && $slider_item_number++ < 1 ) : $slider->the_post(); ?><div class="blog-slider__item swiper-slide">
                                        <div class="blog-slider__img">
                                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759871/jason-leung-798979-unsplash.jpg" alt="">
                                        </div>
                                        <div class="blog-slider__content">
                                            <span class="blog-slider__code"><?php _e( '26 December 2019', 'jan19' ); ?></span>
                                            <div class="blog-slider__title"><?php _e( 'Lorem Ipsum Dolor2', 'jan19' ); ?></div>
                                            <div class="blog-slider__text"><?php _e( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?', 'jan19' ); ?></div>
                                            <a href="#" class="blog-slider__button"><?php _e( 'READ MORE', 'jan19' ); ?></a>
                                        </div>
                                    </div><?php endwhile; ?><?php wp_reset_postdata(); ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                                    <?php if ( $slider->have_posts() ) : ?><?php $slider_item_number = 0; ?><?php while ( $slider->have_posts() && $slider_item_number++ < 1 ) : $slider->the_post(); ?><div class="blog-slider__item swiper-slide">
                                        <div class="blog-slider__img">
                                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759871/alessandro-capuzzi-799180-unsplash.jpg" alt="">
                                        </div>
                                        <div class="blog-slider__content">
                                            <span class="blog-slider__code"><?php _e( '26 December 2019', 'jan19' ); ?></span>
                                            <div class="blog-slider__title"><?php _e( 'Lorem Ipsum Dolor', 'jan19' ); ?></div>
                                            <div class="blog-slider__text"><?php _e( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?', 'jan19' ); ?></div>
                                            <a href="#" class="blog-slider__button"><?php _e( 'Full review', 'jan19' ); ?></a><a href="#" class="blog-slider__button"><?php _e( 'Claim Bonus', 'jan19' ); ?></a><a href="#" class="blog-slider__button" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.18) 69.863%, rgba(0, 0, 0, 0.18) 69.863%);"><?php _e( 't&C Apply', 'jan19' ); ?></a>
                                        </div>
                                    </div><?php endwhile; ?><?php wp_reset_postdata(); ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                                </div>
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