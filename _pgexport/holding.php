<?php
get_header( 'holding' ); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="pg-empty-placeholder">
            <div class="row">
                <div class="col-md-8">
                    <h2><?php the_title(); ?></h2> 
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer( 'holding' ); ?>