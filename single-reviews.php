<?php
/*
 Template Name: reviews
 Template Post Type: post
*/
?>
<?php
get_header(); ?>

<div class="hero">
    <div class="hero__overlay hero__overlay--gradient"></div>
    <div class="hero__mask"></div>
    <div class="hero__inner">
        <div class="container">
            <div class="hero__content" style="min-height: calc(1vh - 50px);"><div class="hero__content__inner" id='navConverter' style="margin-top: 150px; margin-bottom: 150px;">
                    <h1 class="hero__title"><?php the_title(); ?></h1><p><?php echo get_theme_mod( 'page_text' ); ?></p>



                </div>

            </div>
        </div>
    </div>
</div><div class="hero__sub bg-warning">
        <span id="scrollToNext" class="scroll"> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class='hero__sub__down' fill="currentColor" width="512px" height="512px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path d="M256,298.3L256,298.3L256,298.3l174.2-167.2c4.3-4.2,11.4-4.1,15.8,0.2l30.6,29.9c4.4,4.3,4.5,11.3,0.2,15.5L264.1,380.9c-2.2,2.2-5.2,3.2-8.1,3c-3,0.1-5.9-0.9-8.1-3L35.2,176.7c-4.3-4.2-4.2-11.2,0.2-15.5L66,131.3c4.4-4.3,11.5-4.4,15.8-0.2L256,298.3z"/>
            </svg> </span>
    </div><div class="expanded landing__section">
        <div class="container">

        <?php
            $slider_args = array(
                'tag' => 'slider'
            )
        ?><?php $slider = new WP_Query( $slider_args ); ?><?php if ( $slider->have_posts() ) : ?><div class="hero__content__inner" id='navConverter'>
            <div class="blog-slider">
                <div class="blog-slider__wrp swiper-wrapper">
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


                </div>
                <div class="blog-slider__pagination"></div>
            </div>
        </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?></div>
    </div><?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?><div <?php post_class( 'steps landing__section' ); ?> id="post-<?php the_ID(); ?>">

        <div class="container"><?php the_content(); ?></div>
    </div><?php endwhile; ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>








<?php get_footer(); ?>