<?php 
function theme_files(){
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], '5.3.3');//collego il bootstrap css
    wp_enqueue_style('main-styles', get_theme_file_uri('/assets/main.css'), ['bootstrap']);//collego il main css
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], '5.3.3', ['in_footer' => true]);//collego il file bootstrap sript
    wp_enqueue_script('theme-scripts', get_theme_file_uri('/assets/script.js'), [], '202404261512', ['strategy' => 'defer']);//collego il mio file script
}

add_action('wp_enqueue_scripts', 'theme_files');

function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_features');

function create_sidebar_cards() { ?>
    <div class="my-3 btn btn-outline-info text-end "><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div><?php
}