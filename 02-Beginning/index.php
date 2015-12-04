<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="menu">
    Some menu bar ...
</div>
<div class="main">
    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?= the_title() ?></h2>
        <p><?= the_content() ?></p>
        <a href="<?= the_permalink() ?>">Read more</a>
        <hr>
        <?php
    endwhile;
    endif;
    ?>
</div>
<?php wp_footer(); ?>
</body>
</html>