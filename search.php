<?php get_header()?>
<div class="top_espace"></div>

<div class="menu-lecons">

    <div class="menu-lecons_bar">
        <?= get_search_form()?>
    </div>

    <nav class="menu-categories">
          <?php 
            wp_nav_menu ( array (
            'theme_location' => 'categories',
            "menu_class" => "none"
          ) ); ?>
        </nav>
</div>

<h1 class="search_titlte">Résultat de la recherche :<span class="search-requette"> <?= get_search_query() ?></span></h1>

<div class="archive">
    <?php if (have_posts()): ?>
        <div class="lecons_grille">
        <?php while(have_posts()): the_post();?>
        
                <?php get_template_part('parts/post', 'post'); ?>
       
            <?php endwhile ?>
          
        </div>
        <?php the_posts_pagination();?>
    <?php else: ?>
        <h1 class="archive_none">Il n'y a pas de naknowleçon dcorrepondant à votre recherche.</h1>
    <?php endif; ?>
    
</div>
<div class="bot_espace"></div>
<?php get_footer()?>

