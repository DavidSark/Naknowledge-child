<?php get_header()?>
<div class="top_espace"></div>

<div class="marge_page favories">
    <h1 class="favories-title">
            <img class="favorie-img" src="https://davidsarkissian.fr/wp-content/uploads/2023/01/icone_favorie.png" alt="icon des favories">
            Naknowleçons favories
        </h1>

        <div class="favories-content">
           
           <?php echo do_shortcode('[wp-favorite-posts]'); ?>

        </div>
    </div>

</div>
<div class="bot_espace"></div>
<?php get_footer()?>
