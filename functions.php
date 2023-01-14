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


// pour le profil à revoir
// function display_user_email_by_slug() {
//     $user_slug = get_query_var( 'author_name' );
//     $user = get_user_by( 'slug', $user_slug );
//     if( !empty( $user ) ) {
//         $email = $user->user_email;
//         echo '<p>Adresse e-mail : '.$email.'</p>';
//     }
// }

//Ajout de la feuille de style : 
function nano_theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'nano_theme_name_scripts' );



// // /Ajout des scripts : 
// function my_scripts() {
//     wp_enqueue_script( 'my_script', get_template_directory_uri() . '/js/my_script.js', array( 'jquery' ), '1.0', true );
// }
// add_action( 'wp_enqueue_scripts', 'my_scripts' );



// redirection pour les non-connectés : 
//seulement depuis accueil (si page des derniers articles)
add_action( 'template_redirect', 'redirect_non_logged_users_to_specific_page' );
function redirect_non_logged_users_to_specific_page() {
    if ( !is_user_logged_in() && (is_page('profile') || is_page('creer-une-lecon') || is_page('favories')) ){
    wp_redirect( 'http://localhost/naknowledge/log-in/' ); 
        exit;
   };

   /* redirection de page lorsqu'un article est supprimer */
   $link = $_SERVER['REQUEST_URI'];
   if (strpos($link, 'trashed') !== false) {
    header("Location: http://localhost/naknowledge/naknowlecons/");
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
function example_shortcode() {
    // code à exécuter lorsque le shortcode est utilisé
    return '[wp-favorite-posts]';
 }
 add_shortcode( '[wp-favorite-posts]', 'example_shortcode' );