
        </div>
        <div class="greenbg">
            <div class="container">
                <div class="pg-empty-placeholder">
                    <div id="footer" class="row"> 
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
                            <p><?php _e( 'middle section', 'lwfitness' ); ?></p> 
                        </div>
                        <div class="col-lg-4">
                            <?php _e( 'right section', 'lwfitness' ); ?>
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
