<?php
get_header(); ?>

                    <div class="well">
                        <?php _e( 'contentholder.php', 'lwfitness' ); ?>
                    </div>
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="pg-empty-placeholder">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php if ( have_posts() ) : ?>
                                            <?php while ( have_posts() ) : the_post(); ?>
                                                <div class="pg-empty-placeholder">
</div>
                                            <?php endwhile; ?>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                        <?php endif; ?> 
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

<?php get_footer(); ?>