<div class="expanded landing__section">
                    <h2 class="text-center font-weight-bold text-uppercase"><?php echo get_theme_mod( 'tips_title', __( 'Strategy &amp; Tips', 'jan19' ) ); ?></h2><?php
        $editors-tips_args = array(
            'category_name' => 'strategy',
            'tag' => 'editors-tips',
            'order' => 'DESC'
        )
    ?><?php $editors-tips = new WP_Query( $editors-tips_args ); ?><?php if ( $editors-tips->have_posts() ) : ?><div class="container">
                        <div class="steps__inner">
                            <?php while ( $editors-tips->have_posts() ) : $editors-tips->the_post(); ?><div class="step">
                                <div class="step__media"><?php the_content(); ?></div>
                                
                                
                            </div><?php endwhile; ?><?php wp_reset_postdata(); ?>
                            
                            
                        </div>
                    </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                </div>