<?php
/*
    Template Name: Formulaire en front inscription
*/
	acf_form_head();
    get_header();
	// …

    acf_form(array(
        'post_id' => 'new_post', // On va créer une nouvelle publication
        'field_groups' => array( 'group_63bf05319a17d' ), // L'ID du post du groupe de champs
        'new_post' => array(
            'post_type' => 'post', // Enregistrer dans l'annuaire
            'post_status' => 'publish', // Enregistrer en brouillon
        ),
        'return' => add_query_arg( 'updated', 'true', get_permalink() ),
        'updated_message' => __("Post created", 'acf'),
        'html_submit_button' => '<input type="submit" class="acf-button button button-primary button-large" value="%s" />',
        'post_title' => true,
        'uploader' => 'basic',
        // 'fields' => array('titre_de_la_lecon'),
        'submit_value' => "Créer l'article",
        'updated_message' => 'Article créé avec succès',
        'return' => '%post_url%',
        'action' => 'create_post'
        ),
        $post_id
        );
  
    get_footer();
?>