             <div class="card">

 <!-- Appel de l'image en tant que miniature -->
            <?php 
            $image_id = get_field('image_mise_en_avant', $post->ID);
            set_post_thumbnail( $post->ID, $image_id );
            ?>  

            <div class="card-bloc_image">
                <?php the_post_thumbnail('medium')?>
            </div>


                <figure class="card-user_info">
                    <!-- Appel de l'image de profil et du nom de l'auteur de l'article-->
                    <fig class="user_image">
                        <?php echo get_avatar( get_the_author_email(), 35 );?>
                    </fig>
                    <figcaption class="user_name">
                        <?php the_author()?>
                    </figcaption>
                 </figure>

                 <div class="card-favorie">
                     <?php wpfp_link() ?>
                 </div>

                <!-- Appel de la catégorie de l'article
                <div>
                    <//?php the_category()?>
                </div> -->

                <!--niveau de la lecon-->
                <div class="card-niveau">
                    <?php 
                        $category = get_field('niveaux_de_difficulte');
                        if (($category == 1) || ($category == 0)) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_1.svg"/>';
                        }
                    ?>
                    <?php 
                        $category = get_field('niveaux_de_difficulte');
                        if ($category == 2) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_2.svg"/>';
                        }
                    ?>
                    <?php 
                        $category = get_field('niveaux_de_difficulte');
                        if ($category == 3) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_3.svg"/>';
                        }
                    ?>
                    <?php 
                        $category = get_field('niveaux_de_difficulte');
                        if ($category == 4) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_4.svg"/>';
                        }
                    ?>
                    <?php 
                        $category = get_field('niveaux_de_difficulte');
                        if ($category == 5) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_5.svg"/>';
                        }
                    ?>

                </div>

            
                <!--Appel des étiquettes (tags) de l'article -->
                <p class="card-tags">
                    <?php 
                        $post_tags = wp_get_post_tags(get_the_ID());
                        foreach ($post_tags as $tag){
                        echo '<a href="'.get_tag_link($tag->term_id).'">#'.$tag->name.'</a> ';
                        }
                        ?>
                </p>

                
                <!-- Appel du titre de l'article-->         
                <h2 class="card-titre">    
                    <?php the_title() ?>
                </h2>
                
                <!--Appel de la description de l'article  -->
                <p class="card-text">
                    <?php 
                        $value = get_field('description_lecon', $post->ID); 
                        echo " $value "
                    ?>
                </p>


                <!--Appel du lien permettant d'aller à l'article -->
                <p class="card-lien"><a href="<?php the_permalink() ?>">Lire la leçon</a></p>
            
            </div>
