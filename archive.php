<?php get_header() ?>


<h1>Voir toutes les leçons</h1>

<?php if (have_posts()): ?>
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    <?php while(have_posts()): the_post();?>
    
        <div>
            <?php get_template_part('parts/post', 'post'); ?>
        </div>
   

        <?php endwhile ?>
      
    </div>
    <?php the_posts_pagination();?>
<?php else: ?>
    <h1>Il n'y a pas d'articles !</h1>
<?php endif; ?>
