<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <!--[if lt IE 9]>
    <script src="http://blog.petrbazout.cz/subdom/blog/wp-content/themes/blogtheme/html5shiv-printshiv.js"></script>
<![endif]-->
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="icon" href="http://petrbazout.cz/wp-content/themes/blogtheme/favicon.ico" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>
    
    </head>
    <body <?php body_class(); ?>>
        <div class="container">
            <div class="header-container">
                <div class="header-content">
                   <header class="site-header">
                       <a href="http://blog.petrbazout.cz">
                            <div class="logo">
                                <?php include 'icons/logo.php'; ?>
                            </div>
                        </a>
                       <div class="menu-search">
                           <nav class="header-nav">
                               <a href="http://blog.petrbazout.cz" >Úvod</a>
                               <a href="http://petrbazout.cz" >Portfolio</a>
                           </nav>
                        </div>
                        <div class="search-form">
                            <?php get_search_form(); ?>
                        </div>
                        
                   </header>
                </div>
            
            
            </div>
            
                
            