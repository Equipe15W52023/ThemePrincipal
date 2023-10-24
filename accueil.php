<article class="accueil">
    <div class="titre_accueil">
        <h1><?= get_the_title(); ?></h1>
    </div>
    <div class="description_accueil">      
        <?php the_content();?>
    </div>
    <?php
            if(have_posts()):
                while (have_posts()) : the_post();

                $section = 'accueil';

            endwhile;
            endif;
        ?>
</article>