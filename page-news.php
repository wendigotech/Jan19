<?php
get_header(); ?>

<div class="space"></div><?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?><div <?php post_class( 'steps landing__section' ); ?> id="post-<?php the_ID(); ?>">

        <div class="container"><?php the_content(); ?></div>
    </div><?php endwhile; ?><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'jan19' ); ?></p><?php endif; ?>








<?php get_footer(); ?>