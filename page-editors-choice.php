<?php
get_header(); ?>

<div class="hero">
    <div class="hero__overlay hero__overlay--gradient"></div>
    <div class="hero__mask"></div>
    <div class="hero__inner">
        <div class="container">
            <div class="hero__content" style="min-height: calc(1vh - 50px);"><div class="hero__content__inner" id='navConverter' style="margin-top: 150px; margin-bottom: 150px;">
                    <h1 class="hero__title"><?php the_title(); ?></h1>
                    <p class="hero__text"><?php _e( 'Evie is an MIT licensed template bundled with a minimal style guide to build websites faster. It is extemely lightweight, customizable and works perfectly on modern browsers.', 'jan19' ); ?></p>


                </div>

            </div>
        </div>
    </div>
</div><div class="hero__sub">
        <span id="scrollToNext" class="scroll"> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class='hero__sub__down' fill="currentColor" width="512px" height="512px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path d="M256,298.3L256,298.3L256,298.3l174.2-167.2c4.3-4.2,11.4-4.1,15.8,0.2l30.6,29.9c4.4,4.3,4.5,11.3,0.2,15.5L264.1,380.9c-2.2,2.2-5.2,3.2-8.1,3c-3,0.1-5.9-0.9-8.1-3L35.2,176.7c-4.3-4.2-4.2-11.2,0.2-15.5L66,131.3c4.4-4.3,11.5-4.4,15.8-0.2L256,298.3z"/>
            </svg> </span>
    </div><?php
    $choice_args = array(
        'category_name' => 'choice'
    )
?><?php $choice = new WP_Query( $choice_args ); ?><?php if ( $choice->have_posts() ) : ?><?php get_template_part( 'content', 'choice' ); ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?><?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?><div <?php post_class( 'expanded landing__section' ); ?> id="post-<?php the_ID(); ?>">
        <div class="container"><?php the_content(); ?></div>
    </div><?php endwhile; ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?><?php
    $tips_args = array(
        'category_name' => 'strategy',
        'tag' => 'tips'
    )
?><?php $tips = new WP_Query( $tips_args ); ?><?php if ( $tips->have_posts() ) : ?><div class="expanded landing__section">
        <div class="container">
            <div class="steps__inner">
                <?php $tips_item_number = 0; ?><?php while ( $tips->have_posts() && $tips_item_number++ < 3 ) : $tips->the_post(); ?><div class="step">
                    <div class="step__media"><?php the_content(); ?></div>


                </div><?php endwhile; ?><?php wp_reset_postdata(); ?>


            </div>
        </div>
    </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>








<?php get_footer(); ?>