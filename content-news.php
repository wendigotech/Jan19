<div class="steps landing__section">
                    
                    <?php
        $news_args = array(
            'category_name' => 'news',
            'order' => 'DESC'
        )
    ?><?php $news = new WP_Query( $news_args ); ?><?php if ( $news->have_posts() ) : ?><div class="container">
                        <div class="steps__inner">
                            <?php $news_item_number = 0; ?><?php while ( $news->have_posts() && $news_item_number++ < 3 ) : $news->the_post(); ?><div class="step">
                                <div class="card"> 
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'normal', array(
                                    'class' => 'card-img-top page-link'
                                ) );
                                }
                             ?> 
                            <div class="card-body"> 
                                <h4 class="card-title font-weight-bold page-link text-dark"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h4>                                                                                                    
                            </div>                             
                        </div>
                                
                                
                            </div><?php endwhile; ?><?php wp_reset_postdata(); ?>
                            
                            
                        </div>
                    </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                </div>