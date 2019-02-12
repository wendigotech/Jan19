<div class="landing__section steps">
                    
                    <?php
        $new_args = array(
            'category_name' => 'new',
            'order' => 'DESC'
        )
    ?><?php $new = new WP_Query( $new_args ); ?><?php if ( $new->have_posts() ) : ?><div class="container">
                        <?php while ( $new->have_posts() ) : $new->the_post(); ?><div class="row pg-empty-placeholder">
                        <?php the_content(); ?>
                    </div><?php endwhile; ?><?php wp_reset_postdata(); ?>
                    </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                </div>