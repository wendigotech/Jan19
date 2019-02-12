<div class="steps landing__section">
                    
                    <?php
        $news_args = array(
            'category_name' => 'news',
            'order' => 'DESC'
        )
    ?><?php $news = new WP_Query( $news_args ); ?><?php if ( $news->have_posts() ) : ?><div class="container">
                        <div class="steps__inner">
                            <?php $news_item_number = 0; ?><?php while ( $news->have_posts() && $news_item_number++ < 3 ) : $news->the_post(); ?><div class="step">
                                <?php if ( is_singular() ) : ?><?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal' ) : null; ?><div class="step__media" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/undraw_responsive.svg" class="step__image">
                                </div><?php else : ?><?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal' ) : null; ?><div class="step__media" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"><a href="<?php echo esc_url( get_permalink() ); ?>">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/undraw_responsive.svg" class="step__image">
                                </a></div><?php endif; ?><?php if ( is_singular() ) : ?><h4 class="font-weight-bold"><?php the_title(); ?></h4><?php else : ?><h4 class="font-weight-bold"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h4><?php endif; ?>
                                
                                
                            </div><?php endwhile; ?><?php wp_reset_postdata(); ?>
                            
                            
                        </div>
                    </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                </div>