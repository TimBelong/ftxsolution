<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_style('calendly', get_template_directory_uri() . '/assets/css/calendly.css');

    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/script.js');
    wp_enqueue_script('caleandly', get_template_directory_uri() . '/assets/js/widget.js');
    wp_enqueue_script('caleandly', get_template_directory_uri() . '/assets/js/boxicons.js');
});

?>