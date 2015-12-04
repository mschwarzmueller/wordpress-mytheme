<?php

if (!is_single()) : ?>
    <h2><?= the_title() ?></h2>
    <p><?= the_excerpt() ?></p>
    <a href="<?= the_permalink() ?>">Read more</a>
<?php else : ?>
    <h2><?= the_title() ?></h2>
    <p><?= the_content() ?></p>

<?php endif;