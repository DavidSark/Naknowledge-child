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

<!-- <?php $jeux_videos = get_terms(['taxonomy' => 'jeux_video']); ?>
<?php if (is_array($jeux_videos)): ?>
<ul>
    <?php foreach($jeux_videos as $jeux_video): ?>
    <li>
        <a href="<?= get_term_link($jeux_video) ?>" class="<?= is_tax('jeux_video', $jeux_video->term_id) ? 'active' : '' ?>"><?= $jeux_video->name ?></a>
    </li>
    <?php endforeach; ?>
</ul>
<?php endif ?>
 -->


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