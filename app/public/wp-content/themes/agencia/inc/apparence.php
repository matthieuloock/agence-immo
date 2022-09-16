<?php
add_action('customize_register', function (WP_Customize_Manager $manager) {

    $manager->add_setting('logo');

});