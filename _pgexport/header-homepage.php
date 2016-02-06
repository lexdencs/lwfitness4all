<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content="">          
        <!-- Bootstrap core CSS -->                  
        <!-- Custom styles for this template -->                  
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->         
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->         
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body class=""> 
        <!-- greenbg -->
        <div class="greenbg">
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
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" />
                            </a>
                            <br> 
                        </div>                         
                        <div id="navbar" class="navbar-collapse collapse"> 
                            <?php wp_nav_menu( array(
                                    'menu' => 'Main Menu',
                                    'menu_class' => 'nav navbar-nav navbar-right',
                                    'container' => '',
                                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                    'walker' => new wp_bootstrap_navwalker()
                            ) ); ?> 
                        </div>                         
                        <!--/.nav-collapse -->                         
                    </div>                     
                    <!--/.container-fluid -->                     
                </nav>
            </div>
        </div>
        <div class="whitebg">