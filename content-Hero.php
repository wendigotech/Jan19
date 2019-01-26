<div class="hero">
            <div class="hero__overlay hero__overlay--gradient"></div>
            <div class="hero__mask"></div>
            <div class="hero__inner">
                <div class="container">
                    <div class="hero__content">
                        <div class="hero__content__inner" id='navConverter'>
                            <h1 class="hero__title"><?php the_title(); ?></h1><div class="blog-slider">
                                <div class="blog-slider__wrp swiper-wrapper">
                                    <div class="blog-slider__item swiper-slide">
                                        <div class="blog-slider__img">
                                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759872/kuldar-kalvik-799168-unsplash.jpg" alt="">
                                        </div>
                                        <div class="blog-slider__content">
                                            <span class="blog-slider__code"><?php _e( '26 December 2019', 'jan19' ); ?></span>
                                            <div class="blog-slider__title"><?php _e( 'Lorem Ipsum Dolor', 'jan19' ); ?></div>
                                            <div class="blog-slider__text"><?php _e( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?', 'jan19' ); ?> </div>
                                            <a href="#" class="blog-slider__button"><?php _e( 'READ MORE', 'jan19' ); ?></a>
                                        </div>
                                    </div>
                                    <div class="blog-slider__item swiper-slide">
                                        <div class="blog-slider__img">
                                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759871/jason-leung-798979-unsplash.jpg" alt="">
                                        </div>
                                        <div class="blog-slider__content">
                                            <span class="blog-slider__code"><?php _e( '26 December 2019', 'jan19' ); ?></span>
                                            <div class="blog-slider__title"><?php _e( 'Lorem Ipsum Dolor2', 'jan19' ); ?></div>
                                            <div class="blog-slider__text"><?php _e( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?', 'jan19' ); ?></div>
                                            <a href="#" class="blog-slider__button"><?php _e( 'READ MORE', 'jan19' ); ?></a>
                                        </div>
                                    </div>
                                    <div class="blog-slider__item swiper-slide">
                                        <div class="blog-slider__img">
                                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759871/alessandro-capuzzi-799180-unsplash.jpg" alt="">
                                        </div>
                                        <div class="blog-slider__content">
                                            <span class="blog-slider__code"><?php _e( '26 December 2019', 'jan19' ); ?></span>
                                            <div class="blog-slider__title"><?php _e( 'Lorem Ipsum Dolor', 'jan19' ); ?></div>
                                            <div class="blog-slider__text"><?php _e( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?', 'jan19' ); ?></div>
                                            <a href="#" class="blog-slider__button"><?php _e( 'READ MORE', 'jan19' ); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-slider__pagination"></div>
                            </div><script>var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });</script>
                            <p class="hero__text"><?php the_content(); ?></p>
                            
                            <a href="#" class="button button__accent"><?php _e( 'Download Evie', 'jan19' ); ?></a>
                            <a href="#" class="button hero__button"><?php _e( 'Learn more', 'jan19' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>