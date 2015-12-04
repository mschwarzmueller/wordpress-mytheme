<?php get_header(); ?>
<div class="main">
    <?php
    $i = 0;
    if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('content');
        if ($i == 0) : ?>
            <hr>
            <?php
        endif;
        $i++;
    endwhile;
    endif;
    ?>
</div>
<?php get_footer(); ?>