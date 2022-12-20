<div class="rounded overflow-hidden shadow-lg">
            

            <div class="px-6 py-4">
            <div class="bloc_image">
                <?php the_post_thumbnail('medium' )?>
            </div>
                <div class="font-bold text-xl mb-2 text-cyan-500"><?php the_title() ?></div>
                <p>
                    <?php the_category()?>
                </p>

                <ul>
                    <?php the_terms(get_the_ID(),'jeux_video', '<li>','</li><li>', '</li>');?>
                </ul>
                <p class="text-gray-700 text-base">
            <?php the_excerpt()?>
                </p>
                <a class="text-blue-600" href="<?php the_permalink() ?>">Lire la leçon</a>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 bg rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
        </div>