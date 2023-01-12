<?php get_header()?>

<h1>Résultat de la recherche : <?= get_search_query() ?></h1>


<form>
    <input type="search" name='s' value='<?php get_search_query() ?>' placeholder='Votre recherche'>


    <input type="checkbox" value='1' name='sponso' id='recherche'>
    <label for="recherche">
        Article sponso seulement
    </label>

    <button type='submit'>Chercher</button>
</form>





<?php if (have_posts()): ?>
    <div class="lecons_grille">
    <?php while(have_posts()): the_post();?>
    
            <?php get_template_part('parts/post', 'post'); ?>
   

        <?php endwhile ?>
      
    </div>
    <?php the_posts_pagination();?>
<?php else: ?>
    <h1>Il n'y a pas d'articles !</h1>
<?php endif; ?>






<?php get_footer()?>

