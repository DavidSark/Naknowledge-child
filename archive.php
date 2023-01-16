<?php get_header() ?>
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
        <div class="archive lecons_grille">
        <?php while(have_posts()): the_post();?>
        
                <?php get_template_part('parts/post', 'post'); ?>
    

            <?php endwhile ?>
            </div>
        </div>
        <?php the_posts_pagination();?>
    <?php else: ?>
        <h1 class="archive_none">Il n'y a pas de naknowlecon dans cette catégorie.</h1>
    <?php endif; ?>

<?php get_footer()?>
