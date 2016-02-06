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
        <!--[if lt IE 9]>      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    <![endif]-->         
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
                            <?php _e( 'Playtime', 'lwfitness' ); ?>
                        </a>
                        <br> 
                    </div>                     
                    <div id="navbar" class="navbar-collapse collapse"> 
                        <ul class="nav navbar-nav navbar-right"> 
                            <li class="active"> 
                                <a href="#">
                                    <?php _e( 'Home', 'lwfitness' ); ?>
                                </a>                                 
                            </li>                             
                            <li> 
                                <a href="#">
                                    <?php _e( 'About', 'lwfitness' ); ?>
                                </a>                                 
                            </li>                             
                            <li> 
                                <a href="#">
                                    <?php _e( 'Contact', 'lwfitness' ); ?>
                                </a>                                 
                            </li>                             
                            <li class="dropdown"> 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?php _e( 'Dropdown', 'lwfitness' ); ?> 
                                    <span class="caret"></span>
                                </a>                                 
                                <ul class="dropdown-menu"> 
                                    <li> 
                                        <a href="#">
                                            <?php _e( 'Action', 'lwfitness' ); ?>
                                        </a>                                         
                                    </li>                                     
                                    <li> 
                                        <a href="#">
                                            <?php _e( 'Another action', 'lwfitness' ); ?>
                                        </a>                                         
                                    </li>                                     
                                    <li> 
                                        <a href="#">
                                            <?php _e( 'Something else here', 'lwfitness' ); ?>
                                        </a>                                         
                                    </li>                                     
                                    <li role="separator" class="divider"></li>                                     
                                    <li class="dropdown-header">
                                        <?php _e( 'Nav header', 'lwfitness' ); ?>
                                    </li>                                     
                                    <li> 
                                        <a href="#">
                                            <?php _e( 'Separated link', 'lwfitness' ); ?>
                                        </a>                                         
                                    </li>                                     
                                    <li> 
                                        <a href="#">
                                            <?php _e( 'One more separated link', 'lwfitness' ); ?>
                                        </a>                                         
                                    </li>                                     
                                </ul>                                 
                            </li>                             
                        </ul>                         
                    </div>                     
                    <!--/.nav-collapse -->                     
                </div>                 
                <!--/.container-fluid -->                 
            </nav>             
            <!-- Main component for a primary marketing message or call to action -->             
            <div class="jumbotron"> 
                <h1><?php _e( 'Lexden Test Site', 'lwfitness' ); ?></h1> 
                <p><?php _e( 'This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.', 'lwfitness' ); ?></p> 
                <p><a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">
                        <?php _e( 'View navbar docs &raquo;', 'lwfitness' ); ?>
                    </a></p> 
            </div>             
            <div class="row"> 
                <div class="col-lg-4">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/old-rectory-walling-banner-image.jpg" class="img-responsive" alt="Placeholder image">
                </div>                 
                <div class="col-lg-4">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sandstone-aztec-circles-banner-image.jpg" class="img-responsive" alt="Placeholder image">
                </div>                 
                <div class="col-lg-4">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sandstone-driveways-pathway-setts-banner-image.jpg" class="img-responsive" alt="Placeholder image">
                </div>                 
            </div>             
            <div id="footer" class="row"> 
                <div id="footer-left" class="col-lg-8 center-block">
                    <?php _e( 'Hello', 'lwfitness' ); ?>
                </div>                 
                <div class="col-lg-4">
                    <?php _e( 'John', 'lwfitness' ); ?>
                </div>                 
            </div>             
        </div>         
        <!-- /container -->         
        <!-- Bootstrap core JavaScript    ================================================== -->         
        <!-- Placed at the end of the document so the pages load faster -->         
        <script src="assets/js/jquery.min.js"></script>         
        <script src="bootstrap/js/bootstrap.min.js"></script>         
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->         
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>         
        <?php wp_footer(); ?>
    </body>     
</html>
