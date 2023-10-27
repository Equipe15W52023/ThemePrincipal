   <div class="titre_environnement">
        <h1><?= get_the_title(); ?></h1>
    </div>
 <?php
            if(have_posts()):
                while (have_posts()) : the_post();

                $section = 'environnement';

            endwhile;
            endif;
        ?>