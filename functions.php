<?php 




//activation des functions nécessaires, rajoute ce que tu veux :))
function naknowledge_supports (){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}




//fonction pour changer le séparateur du titre du docuement (dans l'onglet)

function naknowledge_title_separator(){
    return '|';
}
add_filter('document_title_seperator','naknowledge_title_separator');

//pour le titre de la page mais c bizarre à revoir
add_action('after_setup_theme', 'naknowledge_supports');



?>

