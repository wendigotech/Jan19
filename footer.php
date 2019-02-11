</div>
        <!-- Steps -->
        <!-- Expanded sections -->
        <!-- Call To Action -->
        <!-- Footer -->
        <div class="footer footer--dark">
            <div class="container">
                <div class="footer__inner">
                    <a class="navbar__logo" href="<?php echo esc_url( get_home_url() ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/free_logo_2.png" width="60" class="img-fluid p-2"/>
                    </a>
                    <div class="footer__data">
                        <div class="footer__data__item">
                            <div class="footer__row">
                                <nav class="navbar__menu">
                        <?php if ( has_nav_menu( 'primary' ) ) : ?><?php wp_nav_menu( array(
                                                'menu' => 'secondary',
                                                'container' => '',
                                                'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                                'walker' => new wp_bootstrap4_navwalker()
                                        ) ); ?><?php endif; ?>
                    </nav>
                            </div>
                            
                        </div>
                        <div class="footer__data__item d-flex flex-row align-items-center align-content-center justify-content-around">
                            <div class="footer__row"> 
                                <a class="footer__link" href="#"><?php echo get_theme_mod( 'footer_icon1' ); ?></a><a class="footer__link" href="#">                                    <img src="http://pinegrow.com/placeholders/img17.jpg" width="50"><?php echo get_theme_mod( 'footer_icon2' ); ?></a><a class="footer__link" href="#">                                    <img src="http://pinegrow.com/placeholders/img17.jpg" width="50"><?php echo get_theme_mod( 'footer_icon3' ); ?></a><a class="footer__link" href="#">                                    <img src="http://pinegrow.com/placeholders/img17.jpg" width="50"><?php echo get_theme_mod( 'footer_icon4' ); ?></a>
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