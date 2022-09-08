<?php

// Cette fonction empêche l'accès à ce fichier par les visiteurs
defined('ABSPATH') or die('');

// Cette fonction lorsqu'elle est appellée enregistre ce que l'on supporte
add_action('after_setup_theme', function(){
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('html5');
    add_theme_support('post-thumbnails');
});