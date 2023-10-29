<?php

function ajouter_styles() {

wp_enqueue_style(   'style-principale',  // identificateur du link css
                    get_template_directory_uri() . '/style.css',  // enroit où se trouve le fichier style.css
                    array(), // les fichiers css qui dépendent de style.css
                    filemtime(get_template_directory() . '/style.css')  // version de notre style.css
); 
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );
?>