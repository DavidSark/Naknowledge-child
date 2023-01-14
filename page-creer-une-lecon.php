
<body class="bloc_formulaire">
    

<h2 class="ajout_form">Ajoutez votre leçon !</h2>
        <?php
        /*
            Template Name: Formulaire en front inscription
        */
            acf_form_head();
            get_header();
            // …

            acf_form(array(
                'post_id' => 'new_post', // On crée une nouvelle publication
                'field_groups' => array( 'group_63bf05319a17d' ), // L'ID du post du groupe de champs
                'new_post' => array(
                    'post_type' => 'post', // Enregistrer dans article
                    'post_status' => 'publish', // publier
                ),
                'return' => add_query_arg( 'updated', 'true', get_permalink() ),
                'updated_message' => __("Post created", 'acf'),
                'html_submit_button' => '<input type="submit" class="acf-button button button-primary button-large" value="%s" />',
                'post_title' => true,
                'uploader' => 'basic',
                'submit_value' => "Publier la naknowleçon",
                'updated_message' => 'Votre naknowleçon a bien été publié',
                'return' => '%post_url%',
                'action' => 'create_post'
                ),
                );
        
            get_footer();
        ?>
        </body>