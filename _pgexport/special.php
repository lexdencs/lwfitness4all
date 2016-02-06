<?php
/*
 Template Name: Special
 */
?>
<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content="">          
        <!-- Bootstrap core CSS -->         
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->         
        <link href="navbar.css" rel="stylesheet"> 
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->         
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->         
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body> 
        <div class="container"> 
            <!-- Static navbar -->             
            <nav class="navbar navbar-default"> 
                <div class="container-fluid"> 
                    <div class="navbar-header"> 
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
                            <span class="sr-only"><?php _e( 'Toggle navigation', 'lwfitness' ); ?></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                        </button>                         
                        <a class="navbar-brand" href="#">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                        <br> 
                    </div>
                    <div id="navbar" class="navbar-collapse collapse"> 
                        <?php wp_nav_menu( array(
                                'menu' => 'Main Menu',
                                'menu_class' => 'nav navbar-nav navbar-right',
                                'container' => ''
                        ) ); ?> 
                    </div>                     
                    <!--/.nav-collapse -->                     
                </div>                 
                <!--/.container-fluid -->                 
            </nav>
            <?php
                $all_args = array(
                    'category_name' => 'news',
                    'post_type' => 'post'
                )
            ?>
            <?php $all = new WP_Query( $all_args ); ?>
            <?php if ( $all->have_posts() ) : ?>
                <?php while ( $all->have_posts() ) : $all->the_post(); ?>
                    <div class="pg-empty-placeholder">
                        <div class="row">
                            <div class="col-md-8">
                                <h3><?php the_title(); ?></h3> 
                                <?php the_content(); ?> 
                            </div>
                            <div class="col-md-4">
                                <?php the_post_thumbnail( null, array(
                                        'class' => 'img-responsive'
                                ) ); ?> 
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <?php
                $footer_args = array(
                    'category_name' => 'footer'
                )
            ?>
            <?php $footer = new WP_Query( $footer_args ); ?>
            <?php if ( $footer->have_posts() ) : ?>
                <?php while ( $footer->have_posts() ) : $footer->the_post(); ?>
                    <div class="pg-empty-placeholder">
                        <div id="footer" class="row"> 
                            <div class="col-lg-8">
                                <?php the_content(); ?> 
                            </div>
                            <div class="col-lg-4">
                                <?php _e( 'John', 'lwfitness' ); ?>
                            </div>                             
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?> 
            <!-- Main component for a primary marketing message or call to action -->             
        </div>         
        <!-- /container -->         
        <!-- Bootstrap core JavaScript
    ================================================== -->         
        <!-- Placed at the end of the document so the pages load faster -->         
        <script src="assets/js/jquery.min.js"></script>         
        <script src="bootstrap/js/bootstrap.min.js"></script>         
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->         
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>         
        <?php wp_footer(); ?>
    </body>     
</html>
