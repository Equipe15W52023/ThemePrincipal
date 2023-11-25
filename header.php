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

 

<body class="site <?= (is_front_page()?'no-aside':'') ?> ">
   <header class="site__entete">
       <section class="menu_recherche">
           <div class="logomenu">
               <?php the_custom_logo(); ?>
            </div>
        <!-- <input type="checkbox" id="chkMenu"> -->
        
        <div class="site__entete_suite">
            <?php wp_nav_menu(array(
                "menu" => "entete",
                "container" => "nav"
                )) ?>
<!-- Bouton pour basculer entre les catégories -->
 
<button id="toggle-category-button">Basculer les catégories</button>
         
              
    </div>
    
</section>
<div class="navbar">
  <div class="container nav-container">
  <input class="checkbox" type="checkbox" name="burger_menu" id="burger" />
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div>  
    
    <div class="menu-items">
        <?php
      
      get_template_part("templates-parts/aside");
      
      ?>
      
    </div>
  </div>
</div>
</nav>




    
