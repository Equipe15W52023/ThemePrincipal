<?php
// Template pour la page d'accueil personnalisée
get_header();

// Vérifiez si la catégorie actuelle est définie dans le stockage local
if (isset($_COOKIE['currentCategory'])) {
    $currentCategory = $_COOKIE['currentCategory'];
} else {
    $currentCategory = 'design'; // Catégorie par défaut si aucune n'est définie dans le stockage local
}

// Récupération des articles de la catégorie actuelle
//IMPORTANT: il faut créer la catégori prog et design pour les articles
$args = array(
    'post_type' => 'post',
    'orderby' => 'meta_value_num',
    'meta_key' => 'custom_post_order',
    'order' => 'ASC',
    'category_name' => $currentCategory,
);

$custom_query = new WP_Query($args);
?>
<!-- Bouton pour basculer entre les catégories -->

<button id="toggle-category-button">Basculer les catégories</button>

<!-- les sections/articles de la page -->
<article class="acceuil">
<?php get_template_part('accueil');?>
</article>

<article class="futur">

</article>
<article class="grille_cours">

</article>

<article class="environnement">
<?php get_template_part('environnement');?>

</article>

<article class="prof">

</article>
<article class="lien">

</article>

<?php  
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Sélectionnez le bouton par son ID
    var toggleCategoryButton = document.getElementById('toggle-category-button');

    // Fonction pour basculer entre les catégories
    function toggleCategory() {
        var currentCategory = localStorage.getItem('currentCategory');
        if (!currentCategory || currentCategory === 'design') {
            currentCategory = 'prog'; 
        } else {
            currentCategory = 'design'; 
        }

        // Enregistrez la nouvelle catégorie dans le stockage local
        localStorage.setItem('currentCategory', currentCategory);

        // Mettez à jour la catégorie actuelle dans le cookie
        document.cookie = 'currentCategory=' + currentCategory + '; path=/';
        //on rafraichi la page
        location.reload();    
    
    }

    // Ajoutez un gestionnaire d'événement au bouton
    toggleCategoryButton.addEventListener('click', toggleCategory);
});
</script>