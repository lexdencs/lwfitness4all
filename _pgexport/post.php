<?php
get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="">
                <div class="">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="well">
                                <?php _e( 'post.php', 'lwfitness' ); ?>
                                <br>
                            </div>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                        <?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
                            <div class="col-md-4" id="sidebar">
                                <?php dynamic_sidebar( 'right_sidebar' ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Whoops None Here' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>