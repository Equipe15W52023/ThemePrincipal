<!DOCTYPE html>

<html lang="fr-ca">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

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

        <?php  get_search_form() ?>

        <!-- <label class="burger" for="chkMenu">

            <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="50" height="50"></label> -->

            <nav>

            <section id="site__header__titre">

 

<h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>

<h2><?= bloginfo('description') ?></h2>

</section>

    </div>

</section>

</header>
