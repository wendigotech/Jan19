<div class="steps landing__section">
                    
                    <?php
        $choice_args = array(
            'category_name' => 'choice',
            'order' => 'DESC'
        )
    ?><?php $choice = new WP_Query( $choice_args ); ?><?php if ( $choice->have_posts() ) : ?><div class="container">
                        <?php while ( $choice->have_posts() ) : $choice->the_post(); ?><div class="row pg-empty-placeholder">
                        <?php the_content(); ?>
                    </div><?php endwhile; ?><?php wp_reset_postdata(); ?>
                    </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                </div>