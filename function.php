<?php 

function gemstone_files() {
    wp_enqueue_style('gemstone_main_style', get_styleshee-uri());
}

add_action('wp_enqueue_scripts', 'gemstone_files');