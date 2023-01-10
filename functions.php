<?php 

require_once('options/apparence.php');
//pour la gestion d'événement : 
require_once('options/cron.php');

//activation des functions nécessaires, rajoute ce que tu veux :))
function naknowledge_supports (){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header-mobile', 'Menu principal mobile');
    register_nav_menu('header-ordi', 'Menu principal ordi');
    register_nav_menu('footer', 'Menu footer');
    register_nav_menu('categories', 'Menu categories');

    add_image_size('post-thumbnails', 300, 250, true);
    add_image_size('card-image', 300, 250, true);

}


function montheme_init() {
    register_taxonomy('jeux_video', 'post', [
        'labels' => [
            'name' => 'Jeux Vidéo',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);
    register_taxonomy('dev', 'post', [
        'labels' => [
            'name' => 'dev',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);
  
}

add_action('init', 'montheme_init');


//fonction pour changer le séparateur du titre du docuement (dans l'onglet)

function naknowledge_title_separator(){
    return '|';
}
add_filter('document_title_seperator','naknowledge_title_separator');


//pour le titre de la page mais c bizarre à revoir
add_action('after_setup_theme', 'naknowledge_supports');

//  Appeler le fichier sponso et ainsi appeler les metadonnées
require_once('metaboxes/sponso.php');
SponsoMetaBox::register();


/**
 * @param WP_Query $query
 */
function montheme_pre_get_posts ($query) {
    if(is_admin() || !is_search() || !$query->is_main_query()) {
        return;
    }
    if (get_query_var('sponso') === '1') {
        $meta_query = $query->get('meta_query', []);
        $meta_query[] = [
            'key' => SponsoMetaBox::META_KEY,
            'compare' => 'EXISTS', 
        ];
        $query->set('meta_query', $meta_query);
    }
}

function montheme_query_vars($params){
    $params[] = 'sponso';
    return $params;
}

add_action('pre_get_posts','montheme_pre_get_posts');
add_filter('query_vars', 'montheme_query_vars');


//renvoie et affichage de résultat dans la base de données
// global $wpdb;

// $tag = "";
// $query = $wpdb->prepare("SELECT name FROM {$wpdb->terms} WHERE slug=%s", [$tag]);
// $results = $wpdb->get_results($query);
// echo '<pre>';
// var_dump($results);
// echo '</pre>';
// die();

