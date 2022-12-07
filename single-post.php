<?php get_header()?>


<?php if (have_posts()): ?>
   
    <?php while(have_posts()): the_post();?>
    <div class="">
        <h1 class="text-red-800"><?php the_title()?></h1>

        <?php the_content()?>
        <?php endwhile ?>
    </div>
<?php else: ?>
    <h1>Il n'y a pas d'articles !</h1>
<?php endif; ?>

<?php get_footer()?>

