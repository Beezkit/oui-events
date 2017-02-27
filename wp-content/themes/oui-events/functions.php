<?php

add_theme_support( 'post-thumbnails');
the_post_thumbnail();                  // without parameter -> 'post-thumbnail'

register_nav_menus( array(
    'Top' => 'Navigation principale',
    'Bot' => 'Navigation footer',
) );

// CUSTOM POST TYPE COMPETENCES
register_post_type(
   'presentation',
   array(
        'label' => 'Ma présentation',
        'labels' => array(
            'name' => 'Ma présentation',
            'singular_name' => 'Ma présentation',
            'all_items' => 'Toutes mes présentations',
            'add_new_item' => 'Ajouter une présentation',
            'edit_item' => 'Éditer une présentation',
            'new_item' => 'Nouvelle présentation',
            'view_item' => 'Voir la présentation',
            'search_items' => 'Rechercher parmi les présentations',
            'not_found' => 'Pas de présentation trouvée',
            'not_found_in_trash'=> 'Pas de présentation dans la corbeille'
            ),
        'public' => true,
        'capability_type' => 'post',
        'supports' => array(
        	'title',
        	'editor'
        ),
        'has_archive' => true
    )
);
