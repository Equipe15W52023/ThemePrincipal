<!DOCTYPE html>

<html lang="fr-ca">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Montserrat&family=Red+Hat+Display:wght@300&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>


   <header class="site__entete">
   <div class="site__entete_suite">
   
   <img class="imglogo" src="<?php echo get_template_directory_uri()?>/medias/logotim.png" alt="medias/logotim.png" />
            <?php wp_nav_menu(array(
                "menu" => "entete",
                "container" => "nav"
                )) ?>
   </div>
    <nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
          <?php
      
      get_template_part("templates-parts/aside");
      
      ?>
          </ul>
          <div class="logomenu">
               <?php the_custom_logo(); ?>
            </div>
      </div>
  </nav>
    
        
<!-- Bouton pour basculer entre les catégories <button id="toggle-category-button">Basculer les catégories</button>-->
 

         
              
    
    
</section>

</header>




    
