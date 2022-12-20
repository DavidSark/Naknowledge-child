<?php get_header()?>


<?php if (have_posts()): ?>
   
    <?php while(have_posts()): the_post();?>
    <div class="">
        <h1 class="titre_article">Test<?php the_title()?></h1>

        <?php if(get_post_meta(get_the_ID(), SponsoMetaBox::META_KEY, true) === '1'): ?>
        <div>
            cet article est sponsorisé
        </div>
        <?php endif ?>
 
        <p> 
            <img src="<?php the_post_thumbnail('card-image'); ?> " alt="" class="image"/>
        </p>
       
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

