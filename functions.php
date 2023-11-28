<?php
// Ajout d'une section pour ajouter un arrière plan
$another_args = array(
    'default-color'      => '0000ff',
    'default-image'      => get_template_directory_uri() . '/images/wapuu.jpg',
    'default-position-x' => 'right',
    'default-position-y' => 'top',
    'default-repeat'     => 'no-repeat',
);
add_theme_support( 'custom-background', $another_args );

function ajouter_styles() {

wp_enqueue_style(   'style-principale',  // identificateur du link css
                    get_template_directory_uri() . '/style.css',  // enroit où se trouve le fichier style.css
                    array(), // les fichiers css qui dépendent de style.css
                    filemtime(get_template_directory() . '/style.css')  // version de notre style.css
); 
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

//rajouter un miniature
add_theme_support( 'post-thumbnails' );
?>