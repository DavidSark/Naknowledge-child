<?= get_search_form()?>





<?php $jeux_videos = get_terms(['taxonomy' => 'jeux_video']); ?>
<?php if (is_array($jeux_videos)): ?>
<ul>
    <?php foreach($jeux_videos as $jeux_video): ?>
    <li>
        <a href="<?= get_term_link($jeux_video) ?>" class="<?= is_tax('jeux_video', $jeux_video->term_id) ? 'active' : '' ?>"><?= $jeux_video->name ?></a>
    </li>
    <?php endforeach; ?>
</ul>
<?php endif ?>





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
