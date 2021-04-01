<?php

function khuz_life_files() {
    wp_enqueue_style('bootstrap4', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
    wp_enqueue_style('my_styles', get_theme_file_uri('style.css'));
    wp_enqueue_script('popper-js', '///getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js', NULL, '1.0', true);
    wp_enqueue_script('my_script', get_theme_file_uri('script.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'khuz_life_files');

function khuz_life_features() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'khuz_life_features');

?>