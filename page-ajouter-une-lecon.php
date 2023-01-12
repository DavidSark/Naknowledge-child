<?php get_header()?>


<?php
/*
    Template Name: Formulaire en front ajout de leçon
*/
	acf_form_head(); // fait appelles aux styles et fonction necessaires pour afficher les champs

	// …

    $args = array(
        'post_id' => 'new_post', // On va créer une nouvelle publication
        'field_groups' => array( 259 ), // L'ID du post du groupe de champs
        'new_post' => array(
            'post_type' => 'post', // Enregistrer dans l'annuaire
            'post_status' => 'publish', // Enregistrer en brouillon
        ),
        'submit_value' => 'Publier ma leçon', // Intitulé du bouton
        'updated_message' => "Votre leçon a bien été publiée ! Merci de nourrir l'arbre de connaissance de Naknowledge :)",
    );
    
                
    $title = get_field('titre_de_la_lecon', $post->ID);
    $my_post = array(
    'ID'           => $post->ID,
    'post_title'   => $title,
    );
    wp_update_post( $my_post );
            
    
    
    
    acf_form( $args ); // Afficher le formulaire
?>

<?php get_footer()?>
