
        </div>
        <div class="greenbgfooter">
            <div class="container">
                <div class="">
                    <div id="footer" class="row"> 
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                            <?php
                                PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="footernavli {CLASSES}" id="{ID}">
                                                                    <a {ATTRS}>{TITLE}</a>
                                                                </li>';
                                wp_nav_menu( array(
                                    'menu' => 'Footer Menu',
                                    'container' => '',
                                    'items_wrap' => '<ul class="footernavul %2$s" id="%1$s">%3$s</ul>',
                                    'walker' => new PG_Smart_Walker_Nav_Menu()
                            ) ); ?>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                            <?php if ( is_active_sidebar( 'middle-footer' ) ) : ?>
                                <div class="pg-empty-placeholder footer-middle">
                                    <?php dynamic_sidebar( 'middle-footer' ); ?>
                                </div>
                            <?php endif; ?> 
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                            <?php if ( is_active_sidebar( 'Right Footer' ) ) : ?>
                                <div class="pg-empty-placeholder footer-right">
                                    <?php dynamic_sidebar( 'Right Footer' ); ?>
                                </div>
                            <?php endif; ?>
                        </div>                         
                    </div>
                </div>                 
                <!-- Main component for a primary marketing message or call to action -->                 
            </div>
        </div>
        <!-- Bootstrap core JavaScript
    ================================================== -->         
        <!-- Placed at the end of the document so the pages load faster -->                           
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->                  
        <?php wp_footer(); ?>
    </body>     
</html>
