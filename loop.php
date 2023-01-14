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


 <div class="marge_page">
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
</div>