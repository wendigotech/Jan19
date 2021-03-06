</div>
        <!-- Steps -->
        <!-- Expanded sections -->
        <!-- Call To Action -->
        <!-- Footer -->
        <div class="footer footer--dark">
            <div class="container">
                <div class="footer__inner">
                    <a class="navbar__logo" href="<?php echo esc_url( get_home_url() ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/My-Casino-Time-logotype.png" class="img-fluid p-2" width="100"/>
                    </a>
                    <div class="footer__data">
                        <div class="footer__data__item">
                            <div class="footer__row">
                                <nav>
                        <?php if ( has_nav_menu( 'primary' ) ) : ?><?php wp_nav_menu( array(
                                                'menu' => 'secondary',
                                                'menu_class' => 'list-inline text-center flex-row justify-content-between align-items-center align-content-center d-lg-flex',
                                                'container' => '',
                                                'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                                'walker' => new wp_bootstrap4_navwalker()
                                        ) ); ?><?php endif; ?>
                    </nav>
                            </div>
                            
                        </div>
                        <div class="footer__data__item">
                            <div class="footer__row d-flex flex-row justify-content-around align-items-start"> 
                                <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon1', 'http://pinegrow.com/placeholders/img17.jpg' ), 'normal' ) ?>" width="100"><img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon2', 'http://pinegrow.com/placeholders/img17.jpg' ), 'normal' ) ?>" width="100"><a href="<?php echo get_theme_mod( 'icon3_link', '#' ); ?>"><img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon3', 'http://pinegrow.com/placeholders/img17.jpg' ), 'normal' ) ?>" href="#" width="100"></a><img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'footer_icon4', 'http://pinegrow.com/placeholders/img17.jpg' ), 'normal' ) ?>" width="100">
                            </div>
                            
                        </div>
                        
                    </div>
                </div><div>
                        <div class="footer__row">
                                
                            <p class="text-white text-center"><?php echo get_theme_mod( 'footer_text', __( 'Paragraph', 'jan19' ) ); ?></p></div><div class="footer__row"> 
                                
                            <p class="text-danger text-center font-weight-bolder"><?php echo get_theme_mod( 'footer_bottom', __( 'Paragraph', 'jan19' ) ); ?></p></div>
                        
                        
                    </div>
            </div>
            
            
            <script>
    var Swiper;
    jQuery(document).ready(function() {
    //initialize swiper when document ready
    var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    })
    });
</script>
            
    <?php wp_footer(); ?></body>
</html>