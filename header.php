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

 

<?php

// $nouvelle_classe = "";

// if (is_front_page()){

//     $nouvelle_classe = "no-aside";

// }

?>
 

<body class="site">

  <header class="site__entete">
   <div id="mySidenav" class="sidenav">
  <a id="closeBtn" href="#" class="close">×</a>
  <ul>
  </ul>
</div>

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

        

        <!-- <label class="burger" for="chkMenu">

            <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="50" height="50"></label> -->

            <nav>

            <section id="site__header__titre">

 

</section>

    </div>

</section>

<script src="header.js"></script>
</header>
