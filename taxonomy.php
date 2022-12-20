<?php get_header()?>

<h1><?= esc_html (get_queried_object()->name) ?></h1>

<?php get_template_part("loop") ?>

<?php get_footer()?>

