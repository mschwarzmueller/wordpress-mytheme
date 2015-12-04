<?php

function loadThemeResources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqeue_scripts', loadThemeResources());