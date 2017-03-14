<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(); ?></title>
    <meta http-equiv="content-language" content="fr-FR" />
    <meta name="author" content="Oui Events" />
    <meta name="copyright" content="Copyright (c)2017 Oui Events Tout droit reservé." />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="google-site-verification" content="elfg3V1h5S710XENw6vG2h_rUrRHRnf1MskNwOWwTM4" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/global.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="menuBurger">
            <span class="menuTop"></span>
            <span class="menuMid"></span>
            <span class="menuBot"></span>
        </div>

        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Oui Events! Organisatrice d'événement'" class="img-fluid" />
            </a>
            <h1><?php bloginfo( 'description' ); ?></h1>
        </div>

        <nav class="navbar navbar-default">
            <?php wp_nav_menu( array( 'theme_location' => 'Top' ) ); ?>
        </nav>
    </div>
</header>
