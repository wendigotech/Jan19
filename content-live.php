<div class="landing__section steps">
                    
                    <?php
        $live_args = array(
            'category_name' => 'live',
            'order' => 'DESC'
        )
    ?><?php $live = new WP_Query( $live_args ); ?><?php if ( $live->have_posts() ) : ?><div class="container">
                        <?php while ( $live->have_posts() ) : $live->the_post(); ?><div class="row pg-empty-placeholder">
                        <?php the_content(); ?>
                    </div><?php endwhile; ?><?php wp_reset_postdata(); ?>
                    </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                </div>