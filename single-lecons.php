<?php get_header()?>


<?php if (have_posts()): ?>
   
    <?php while(have_posts()): the_post();?>
    <div class="">
        <h1 class="titre_article"><?php the_title()?></h1>

        <p> 
            <img src="<?php the_post_thumbnail_url('medium'); ?> " alt="" class="image"/>
        </p>
       
        <?php the_content()?>
        <?php endwhile ?>
    </div>
<?php else: ?>
    <h1>Il n'y a pas d'articles !</h1>
<?php endif; ?>

<?php get_footer()?>

