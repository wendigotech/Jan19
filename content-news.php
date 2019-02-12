<div class="steps landing__section">
                    
                    <?php
        $news_args = array(
            'category_name' => 'news',
            'order' => 'DESC'
        )
    ?><?php $news = new WP_Query( $news_args ); ?><?php if ( $news->have_posts() ) : ?><div class="container">
                        <div class="steps__inner">
                            <?php $news_item_number = 0; ?><?php while ( $news->have_posts() && $news_item_number++ < 3 ) : $news->the_post(); ?><div class="step">
                                <div class="step__media">
                                    <?php if ( has_post_thumbnail( get_the_ID() ) ) : ?><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail( 'normal', array(
                                            'class' => 'step__image page-link'
                                    ) ); ?></a><?php endif; ?>
                                </div>
                                <?php if ( is_singular() ) : ?><h4 class="font-weight-bold page-link text-dark"><?php the_title(); ?></h4><?php else : ?><h4 class="font-weight-bold page-link text-dark"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h4><?php endif; ?>
                                
                            </div><?php endwhile; ?><?php wp_reset_postdata(); ?>
                            
                            
                        </div>
                    </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                </div>