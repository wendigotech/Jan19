<?php
get_header(); ?>

<?php get_template_part( 'content', 'Hero' ); ?>
<div class="pg-empty-placeholder">
    <?php the_content(); ?>
</div>



<div class="expanded landing__section">
    <div class="container">
        <div class="expanded__inner">
            <div class="expanded__media">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/together.svg" class="expanded__image">
            </div>
            <div class="expanded__content">
                <h2 class="expanded__title"><?php _e( 'Ready for production or rapid prototyping', 'jan19' ); ?></h2>
                <p class="expanded__text"><?php _e( 'Landing, authentication and a few other pages to select from, despite the small size. Tested on production at unDraw with amazing speeds and unopinionated on how to structure your project. We really hope you\'ll find it awesome and useful!', 'jan19' ); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="cta cta--reverse">
    <div class="container">
        <div class="cta__inner">
            <h2 class="cta__title"><?php _e( 'Get started now', 'jan19' ); ?></h2>
            <p class="cta__sub cta__sub--center"><?php _e( 'Grab the production version and begin your project instantly.', 'jan19' ); ?></p>
            <a href="#" class="button button__accent"><?php _e( 'Download Evie', 'jan19' ); ?></a>
        </div>
    </div>
</div>


<?php get_footer(); ?>