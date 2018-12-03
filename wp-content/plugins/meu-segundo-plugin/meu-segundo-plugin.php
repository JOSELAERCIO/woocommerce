<?php 
/*
Plugin Name: Personalizar Painel 
Plugin URI: http://exemplo.com.br
Description: Plugin desenvolvido para personalizar o painel administrativo do Wordpress
Version: 1.0
Author: Laércio Oliveira 
Author URI: 
Text Domain: meu-segundo-plugin
License: GPLv2
*/

// Desativar a action welcome panel
remove_action('welcome_panel', 'wp_welcome_panel');

add_action('welcome_panel', 'my_welcome_panel');

function my_welcome_panel() {
    ?>
        <div class="welcome-panel-content">
            <h3>Seja bem-vindo ao painel administrativo!</h3>
            <p>Siga-nos nas redes sociais</p>
        </div>
    <?php
}