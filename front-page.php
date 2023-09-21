<?php
// Template pour la page d'accueil personnalisée
get_header();

// Récupération des articles d'une catégorie particulière
$args = array(
    'post_type' => 'post',
    'orderby' => 'meta_value_num',
    'meta_key' => 'custom_post_order',
    'order' => 'ASC',    
);

$custom_query = new WP_Query($args);

// Boucle pour afficher les articles
if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) :
        $custom_query->the_post();
        the_title();
        the_content();
        // Contenu de l'article
        // Vous pouvez personnaliser la mise en page ici

    endwhile;
    wp_reset_postdata(); // Réinitialise la requête personnalisée
else :
    echo 'Aucun article trouvé dans cette catégorie.';
endif;

get_footer();
?>
