<?php
add_action('wp_enqueue_scripts', function(){
    // Ici on ajoute les scripts CSS et JS qui étaient dans le HEAD
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/style.e2e1a33c.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/main.ef23f591.js');
    
});