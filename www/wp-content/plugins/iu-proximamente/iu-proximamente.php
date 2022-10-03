<?php

/**
* Plugin Name: Próximamente
* Plugin URI: https://github.com/david7ce/ui-prox
* Description: Muestra una página con una cuenta atrás a todos los usuarios menos los administradores
* Author: David Alonso
* Version: 1.0
* Author URI: https://nohaywebs.com/
* License: GPL2
*/

add_action('wp_loaded', 'UI_proximamente');

function UI_proximamente() {
    global $pagenow;

    if ($pagenow !== 'wp-login.php' && !current_user_can('manage_options') && !is_admin()) {
        header($_SERVER["SERVER_PROTOCOL"] . "503 Service Temporaly Unavailable", true, 503);
        header('Content-Type: text/html; charset=utf-8');
        
        if (file_exists(plugin_dir_path(__FILE__) . 'interface/comingsoon.php')) {
            require_once(plugin_dir_path(__FILE__) . 'interface/comingsoon.php');
        }
        die();
    }
}
