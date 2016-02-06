<?php
get_header(); ?>

<div class="well">
    <?php _e( 'index.php', 'lwfitness' ); ?>
</div>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="pg-empty-placeholder">
            <div class="row">
                <div class="col-md-8">
                    <h2><?php the_title(); ?></h2> 
                    <?php the_content(); ?> 
                </div>
                <div class="col-md-4">
                    <h3><?php _e( 'Column title', 'lwfitness' ); ?></h3> 
                    <p><?php _e( 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'lwfitness' ); ?></p> 
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>