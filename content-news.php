<div class="steps landing__section">
                    
                    <?php
        $news_args = array(
            'category_name' => 'news',
            'order' => 'DESC'
        )
    ?><?php $news = new WP_Query( $news_args ); ?><?php if ( $news->have_posts() ) : ?><div class="container">
                        <div class="steps__inner">
                            <?php $news_item_number = 0; ?><?php while ( $news->have_posts() && $news_item_number++ < 3 ) : $news->the_post(); ?><div class="step">
                                <div class="step__media"><?php the_content(); ?></div>
                                
                                
                            </div><?php endwhile; ?><?php wp_reset_postdata(); ?>
                            
                            
                        </div>
                    </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                </div>