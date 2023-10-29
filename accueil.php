
    <div class="titre_accueil">
        <h1><?= get_the_title(); ?></h1>
    </div>
    <div class="description_accueil">      
        <p><?php the_content();?></p>
    </div>
    <?php
            if(have_posts()):
                while (have_posts()) : the_post();

                $section = 'accueil';

            endwhile;
            endif;
        ?>