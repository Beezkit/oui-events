<?php

add_theme_support( 'post-thumbnails');
the_post_thumbnail();                  // without parameter -> 'post-thumbnail'

register_nav_menus( array(
    'Top' => 'Navigation principale',
    'Bot' => 'Navigation footer',
) );
