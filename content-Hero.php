<div class="hero">
            <div class="hero__overlay hero__overlay--gradient"></div>
            <div class="hero__mask"></div>
            <div class="hero__inner">
                <div class="container">
                    <div class="hero__content">
                        <?php
                    $hero_args = array(
                        'category_name' => 'hero'
                    )
                ?><?php $hero = new WP_Query( $hero_args ); ?><?php if ( $hero->have_posts() ) : ?><?php $hero_item_number = 0; ?><?php while ( $hero->have_posts() && $hero_item_number++ < 1 ) : $hero->the_post(); ?><div class="hero__content__inner" id='navConverter'>
                            <div id="carousel1" class="carousel slide" data-ride="carousel"> 
                                <ol class="carousel-indicators"> 
                                    <li data-target="#carousel1" data-slide-to="0" class="active"></li>                                     

                                    <li data-target="#carousel1" data-slide-to="1"></li>                                     

                                    <li data-target="#carousel1" data-slide-to="2"></li>                                     
                                </ol>                                 

                                <div class="carousel-inner"> 
                                    <div class="carousel-item active"> 
                                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img10.jpg" alt="First slide"> 
                                        <div class="carousel-caption d-none d-md-block"> 
                                            <h3><?php _e( 'Slide label 1', 'jan19' ); ?></h3> 
                                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'jan19' ); ?></p> 
                                        </div>                                         
                                    </div>                                     

                                    <div class="carousel-item"> 
                                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img13.jpg" alt="Second slide"> 
                                        <div class="carousel-caption d-none d-md-block"> 
                                            <h3><?php _e( 'Slide label 2', 'jan19' ); ?></h3> 
                                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'jan19' ); ?></p> 
                                        </div>                                         
                                    </div>                                     

                                    <div class="carousel-item"> 
                                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img19.jpg" alt="Third slide"> 
                                        <div class="carousel-caption d-none d-md-block"> 
                                            <h3><?php _e( 'Slide label 3', 'jan19' ); ?></h3> 
                                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'jan19' ); ?></p> 
                                        </div>                                         
                                    </div>                                     
                                </div>                                 

                                <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'jan19' ); ?></span> </a> 
                                <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'jan19' ); ?></span> </a> 
                            </div><h1 class="hero__title"><?php the_title(); ?></h1>
                            <p class="hero__text"><?php the_content(); ?></p>
                            
                            <a href="<?php echo get_post_meta( get_the_ID(), 'field2', true ); ?>" class="button button__accent"><?php _e( 'Download Evie', 'jan19' ); ?></a>
                            <a href="#" class="button hero__button"><?php _e( 'Learn more', 'jan19' ); ?></a>
                        </div><?php endwhile; ?><?php wp_reset_postdata(); ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>