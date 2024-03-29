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


/* Function pour réduire la description à un nombre de caractère pour 
pas que la description soit trop longue. */
function limiter_longueur_description($description) {
    $longueur_max = 100;

    if (strlen($description) > $longueur_max) {
        $description = substr($description, 0, $longueur_max) . "...";
    }
    return $description;
}
add_filter( 'the_excerpt', 'limiter_longueur_description' );


//Ajout de la feuille de style : 
function nano_theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'nano_theme_name_scripts' );


// redirection : 
//seulement depuis accueil (si page des derniers articles)
add_action( 'template_redirect', 'redirect_non_logged_users_to_specific_page' );
function redirect_non_logged_users_to_specific_page() {
    if ( !is_user_logged_in() && (is_page('profile') || is_page('creer-une-lecon') || is_page('favories')) ){
    wp_redirect( 'http://davidsarkissian.fr/log-in/' ); 
        exit;
   };

   /* redirection de page lorsqu'un article est supprimer */
   $link = $_SERVER['REQUEST_URI'];
   if (strpos($link, 'trashed') !== false) {
    header("Location: http://davidsarkissian.fr/naknowlecons/");
    exit();
}
}


/* fonction qui permet de renvoyer seulement des articles, et non des pages, lors d'une recherche */
function search_filter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','search_filter');


// ajout du shortcode pour la page favori :
function fav_shortcode() {
    // code à exécuter lorsque le shortcode est utilisé
    return '[wp-favorite-posts]';
 }
 add_shortcode( '[wp-favorite-posts]', 'fav_shortcode' );
 
 
//Code pour ne pas montrer la barre de navigation admin wordpress, seulement 
//pour les admins
if (!current_user_can('manage_options')) {
	
    remove_action( 'admin_footer', 'wp_admin_bar_render', 1000 );
    remove_action('wp_footer', 'wp_admin_bar_render', 1000);

    function remove_admin_bar_style() {  
  	echo '<style>body.admin-bar #wpcontent, body.admin-bar #adminmenu { padding-top: 0px !important; }</style>';	
    }
    add_filter('admin_head','remove_admin_bar_style');

    function remove_admin_bar_style_frontend() {
        echo '<style>html{ padding-top: 0px !important; }</style>';
    }
    add_filter('wp_head','remove_admin_bar_style_frontend');
}