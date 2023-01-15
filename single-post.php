<?php get_header()?>
<div class="top_espace"></div>

<div class="header_post">
    <button class="button_back" onclick="history.go(-1);"><img class="button_back-img" src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/icone_retour.png" alt="Bouton retour en arrière"></button>
</div>


<div class="single_post">
    <div class="lecon">

        <div class="lecon_bloc1">
            <div class="card-bloc_image lecon_image">
                <?php 
                    $image_id = get_field('image_mise_en_avant', $post->ID);
                    set_post_thumbnail( $post->ID, $image_id );
                ?>  
                <?php the_post_thumbnail('medium' )?>   
            </div>
    
            <div class="lecon-info">
                <div class="card-niveau lecon-niveau">
                    <?php $category = get_field('niveau');
                        if (($category == 1) || ($category == 0)) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_1.svg"/>';
                        }
                    ?>
                    <?php $category = get_field('niveau');
                        if ($category == 2) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_2.svg"/>';
                        }
                    ?>
                    <?php $category = get_field('niveau');
                        if ($category == 3) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_3.svg"/>';
                        }
                    ?>
                    <?php $category = get_field('niveau');
                        if ($category == 4) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_4.svg"/>';
                        }
                    ?>
                    <?php $category = get_field('niveau');
                        if ($category == 5) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_5.svg"/>';
                        }
                    ?>
            
                </div>
        
                <div class="lecon-favorie">
                    <?php wpfp_link() ?>
                </div>
            </div>
        
            <div class="lecon-infos2">
                <!-- Appel de la catégorie de l'article -->
                <p class="lecon-categorie">
                    <?php 
                        $categories = get_the_category();
                        foreach ( $categories as $category ) {
                            echo '<a href="' . get_category_link( $category->term_id ) . '"> ' . $category->name . '</a> ';
                        }
                    ?>
                </p> 
            
                <p class="card-tags lecon-tags">
                    <?php $post_tags = wp_get_post_tags(get_the_ID());
                        foreach ($post_tags as $tag){
                            echo '<a href="'.get_tag_link($tag->term_id).'">#'.$tag->name.'</a> ';
                        }
                    ?>
                </p>

                <?php if ($post->post_author == $current_user->ID) { ?>
                   <button class="lecon-sup"><a onclick="return confirm('Voulez vous vraiment supprimer cette naknowleçon ?')"
                        href="<?php echo get_delete_post_link( $post->ID );?>">
                        Supprimer la leçon
                    </a></button>
                <?php } ?>

            </div>
        </div>
    
            
        <div class="lecon_bloc1">
            <h1 class="lecon-titre"><?php the_title() ?></h1>
            <div class="lecon-text"><?php the_field('contenu_lecon') ?></div>
        </div>

    
    </div>
    
    <div class="autres_lecon">
    
        <?php
            $terms = get_the_terms( $post->ID, array( 'category', 'post_tag' ) );
            $term_ids = wp_list_pluck( $terms, 'term_id' );

            $related_query = new WP_Query( array(
                'post__not_in' => array( $post->ID ),
                'tax_query' => array(
                    'relation' => 'OR',
                    array(
                        'taxonomy' => 'category',
                        'field' => 'id',
                        'terms' => $term_ids
                    ),
                    array(
                        'taxonomy' => 'post_tag',
                        'field' => 'id',
                        'terms' => $term_ids
                    )
                )
            ) );

            if ( $related_query->have_posts() ) : ?>

            <h2 class="autres_lecon-titre">Naknowleçons en rapport</h2>

            <div class="lecons_grille">
                <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
                            
                <?php get_template_part('parts/post', 'post'); ?>

                <?php endwhile; ?>
            </div>

            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

    
    </div>

</div>


<?php get_footer()?>

