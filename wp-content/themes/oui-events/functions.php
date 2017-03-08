<?php

add_theme_support( 'post-thumbnails');
the_post_thumbnail();                  // without parameter -> 'post-thumbnail'
add_image_size('article', 480, 320, true);
add_image_size('list-article', 555, 250, true);
add_image_size( 'singleBlog', 1280, 350, true );

register_nav_menus( array(
    'Top' => 'Navigation principale',
    'Bot' => 'Navigation footer',
) );

function custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


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

// CUSTOM POST TYPE COMPETENCES
register_post_type(
   'prestation',
   array(
        'label' => 'Ma prestation',
        'labels' => array(
            'name' => 'Ma prestation',
            'singular_name' => 'Ma prestation',
            'all_items' => 'Toutes mes prestations',
            'add_new_item' => 'Ajouter une prestation',
            'edit_item' => 'Éditer une prestation',
            'new_item' => 'Nouvelle prestation',
            'view_item' => 'Voir la prestation',
            'search_items' => 'Rechercher parmi les prestations',
            'not_found' => 'Pas de prestations trouvée',
            'not_found_in_trash'=> 'Pas de prestation dans la corbeille'
            ),
        'public' => true,
        'capability_type' => 'post',
        'supports' => array(
        	'title',
        	'editor',
            'thumbnail'
        ),
        'has_archive' => true
    )
);

function get_pagination_links() {
    global $wp_query;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $big = 999999999;

    return paginate_links( array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '?paged=%#%',
        'current' => $current,
        'total' => $wp_query->max_num_pages,
        'prev_next'    => 'false',
        'prev_text'          => __('<'),
        'next_text'          => __('>'),
    ) );
}
