<article class="pg-empty-placeholder">
    <h2><?php the_title(); ?></h2>
    <a href="<?php echo esc_url( wp_get_shortlink()); ?>">
        <?php the_post_thumbnail(); ?>
        <?php _e( 'Link', 'lwfitness' ); ?>
    </a>
</article>