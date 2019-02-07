<div class="steps landing__section">
                    
                    <div class="container">
                        <?php while ( $choice->have_posts() ) : $choice->the_post(); ?><div class="row pg-empty-placeholder">
                        <?php the_content(); ?>
                    </div><?php endwhile; ?><?php wp_reset_postdata(); ?>
                    </div>
                </div>