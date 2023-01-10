<?php get_header()?>
<div class="top_espace"></div>


<?php if (have_posts()): ?>
   
    <?php while(have_posts()): the_post();?>

    <div class="">

        <div class="card-bloc_image">
                <?php the_post_thumbnail('medium' )?>   
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

        <div class="card-niveau">
                    <?php 
                        $category = get_field('niveau');
                        if (($category == 1) || ($category == 0)) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_1.svg"/>';
                        }
                    ?>
                    <?php 
                        $category = get_field('niveau');
                        if ($category == 2) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_2.svg"/>';
                        }
                    ?>
                    <?php 
                        $category = get_field('niveau');
                        if ($category == 3) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_3.svg"/>';
                        }
                    ?>
                    <?php 
                        $category = get_field('niveau');
                        if ($category == 4) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_4.svg"/>';
                        }
                    ?>
                    <?php 
                        $category = get_field('niveau');
                        if ($category == 5) {
                            echo '<img src="http://localhost/naknowledge/wp-content/themes/underscore-child/images/icones/niveau_5.svg"/>';
                        }
                    ?>

                </div>

                <p class="card-tags">
                    <?php 
                        $post_tags = wp_get_post_tags(get_the_ID());
                        foreach ($post_tags as $tag){
                        echo '<a href="'.get_tag_link($tag->term_id).'">#'.$tag->name.'</a> ';
                        }
                        ?>
                </p>


                <h1 class="titre_article">Test<?php the_title()?></h1>
        
 
          <?php the_post_thumbnail('card-image'); ?> 
        <?php the_content()?>




        
        <?php endwhile; endif ?>
    </div>



<h2>Leçons liées</h2>

<?php 
$jeux = array_map(function($term){
    return $term->term_id;
}, get_the_terms(get_post(), 'jeux_video'));
$query = new WP_Query([
    'post__not_in' => [get_the_ID()],
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'tax_query' => [[
        'taxonomy' => 'jeux_video',
        'terms' => $jeux,

    ]]
]);
while($query->have_posts()): $query->the_post();
?>
        <div>
            <?php get_template_part('parts/post', 'post'); ?>
        </div>
<?php endwhile; wp_reset_postdata() ?>



<?php get_footer()?>

