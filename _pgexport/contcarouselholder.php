<?php
get_header(); ?>

                    <div class="well">
                        <?php _e( 'carouselholder.php', 'lwfitness' ); ?>
                    </div>
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="pg-empty-placeholder">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="pg-empty-placeholder">
</div>                                         
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

<?php get_footer(); ?>